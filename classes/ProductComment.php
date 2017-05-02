<?php
/**
 * 2017 taorai.asia
 *
 *
 * @author    steven
 * @copyright 2017 taorai.asia
 */

/**
 * Class CommentCore
 */
class ProductCommentCore extends ObjectModel
{

    /** @var int id_product_comments primary key */
    public $id_product_comments;

    /** @var int $id_product */
    public $id_product;

   /** @var int $id_customer */
    public $id_customer;

   /** @var int $id_attribute */
    public $id_attribute;

   /** @var datetime $date_add */
    public $date_add;

    /** @var text $content */
    public $content;

    /** @var varchar $ip_address */
    public $ip_address;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'product_comments',
        'primary' => 'id_product_comments',
        'multilang' => false,
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'content' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'ip_address' => array('type' => self::TYPE_STRING, 'validate' => 'isIp2Long', 'size' => 15),
        ),
    );


    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_comments',
        'objectNodeName' => 'product_comment',
        'fields' => array(),
    );

    /**
     * Get a comment data for a given id_product_comments
     *
     * @param int $idComment
     *
     * @return array Array with comment's data
     */
    public static function getComment($idComment)
    {
        return Db::getInstance()->getRow('
			SELECT *
			FROM `'._DB_PREFIX_.'product_comments` f
			WHERE f.`id_product_comments` = '.(int) $idComment
        );
    }

    /**
     * Get all comments for a given product
     *
     * @param int $idProduct
     *
     * @return array Multiple arrays with comments' data
     */
    public static function getComments($idProduct)
    {
        return Db::getInstance()->executeS('
        SELECT pc.`id_product_comments`, pc.`content`, pc.`date_add`, pc.`id_attribute`, c.`firstname`, c.`lastname`
        FROM `'._DB_PREFIX_.'product_comments` pc
        LEFT JOIN `'._DB_PREFIX_.'customer` c ON pc.`id_customer`=c.`id_customer`
        WHERE pc.`id_product` = '.(int)$idProduct.'
        ORDER BY pc.`id_product_comments` DESC LIMIT 200');
    }

    /**
     * Get comments for a given product in order
     *
     * @param int $idProduct
     * @param int $idOrder
     *
     * @return array Multiple arrays with comments' data
     */
    public static function getCommentInOrder($idProduct, $idAttribute, $idOrder)
    {
        return Db::getInstance()->executeS('
        SELECT pc.`id_product_comments`, pc.`content`, pc.`date_add`, pc.`id_attribute`, pc.`ip_address`
        FROM `'._DB_PREFIX_.'product_comments` pc
        WHERE pc.`id_product` = '.(int)$idProduct.' AND pc.`id_order` = '.(int)$idOrder.
        ((int)$idAttribute > 0 ? ' AND pc.`id_attribute` = '.(int)$idAttribute : '').'
        LIMIT 1');
    }

    /**
     * Get all comments
     *
     * @return array Multiple arrays with comments' data
     */
    public static function getAllComments()
    {
        return Db::getInstance()->executeS('
        SELECT pc.`id_product_comments`, pc.`content`, pc.`date_add`, pc.`id_attribute`, c.`firstname`, c.`lastname`, pc.`ip_address`
        FROM `'._DB_PREFIX_.'product_comments` pc
        LEFT JOIN `'._DB_PREFIX_.'customer` c ON pc.`id_customer`=c.`id_customer`
        ORDER BY pc.`id_product_comments` DESC');
    }

    /**
     * Delete several objects from database
     *
     * @param array $selection Array with items to delete
     * @return bool Deletion result
     */
    public function deleteSelection($selection)
    {
        /* Also delete Attributes */
        foreach ($selection as $value) {
            $obj = new ProductComment($value);
            if (!$obj->delete()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Adds current Comment as a new Object to the database
     *
     * @param bool $autoDate   Automatically set `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Comment has been successfully added
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = true, $nullValues = false)
    {
        $return = parent::add($autoDate, false);

        return $return;
    }


    /**
     * Deletes current Comment from the database
     *
     * @return bool `true` if delete was successful
     * @throws PrestaShopException
     */
    public function delete()
    {
        Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'product_comments`
			WHERE `id_product_comments` = '.(int) $this->id_product_comments
        );

        $return = parent::delete();

        return $return;
    }

    /**
    * Count number of comments for a given product
    *
    * @param int $idProduct
    *
    * @return int Number of comments
    */
    public static function nbComments($idProduct)
    {
        return Db::getInstance()->getValue('
		SELECT COUNT(*) as nb
		FROM `'._DB_PREFIX_.'product_comments` ag
        WHERE ag.`id_product` = '.(int) $idProduct);
    }

    /**
    * Count number of comments for a given product in a given order
    *
    * @param int $idProduct
    * @param int $idOrder
    *
    * @return int Number of comments
    */
    public static function nbCommentsInOrder($idProduct, $idAttribute, $idOrder)
    {
        return Db::getInstance()->getValue('
        SELECT COUNT(*) as nb
        FROM `'._DB_PREFIX_.'product_comments` ag
        WHERE ag.`id_product` = '.(int) $idProduct.' AND ag.`id_order` = '.(int)$idOrder.
        ((int)$idAttribute > 0 ? ' AND ag.`id_attribute` = '.(int)$idAttribute : ''));
    }
}
