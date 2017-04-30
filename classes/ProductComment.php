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
    /** @var string Name */
    public $name;

    /** @var int id_comment primary key */
    public $id_comment;

    /** @var int $id_product */
    public $id_product;

   /** @var int $id_customer */
    public $id_customer;

   /** @var datetime $date_add */
    public $date_add;

    /** @var text $content */
    public $content;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'product_comments',
        'primary' => 'id_comment',
        'multilang' => false,
        'fields' => array(
            'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'content' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
        ),
    );


    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_comments',
        'objectNodeName' => 'product_comment',
        'fields' => array(),
    );

    /**
     * Get a comment data for a given id_comment
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
			WHERE f.`id_comment` = '.(int) $idComment
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
        SELECT pc.`id_comment`, pc.`content`, pc.`date_add`, c.`firstname`, c.`lastname`
        FROM `'._DB_PREFIX_.'product_comments` pc
        LEFT JOIN `'._DB_PREFIX_.'customer` c ON pc.`id_customer`=c.`id_customer`
        WHERE pc.`id_product` = '.(int)$idProduct.'
        ORDER BY pc.`id_comment` DESC LIMIT 200');
    }

    /**
     * Get comments for a given product in order
     *
     * @param int $idProduct
     * @param int $idOrder
     *
     * @return array Multiple arrays with comments' data
     */
    public static function getCommentsInOrder($idProduct, $idOrder)
    {
        return Db::getInstance()->executeS('
        SELECT pc.`id_comment`, pc.`content`, pc.`date_add`
        FROM `'._DB_PREFIX_.'product_comments` pc
        WHERE pc.`id_product` = '.(int)$idProduct.' AND pc.`id_order` = '.(int)$idOrder.'
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
        SELECT pc.`id_comment`, pc.`content`, pc.`date_add`, c.`firstname`, c.`lastname`
        FROM `'._DB_PREFIX_.'product_comments` pc
        LEFT JOIN `'._DB_PREFIX_.'customer` c ON pc.`id_customer`=c.`id_customer`
        ORDER BY pc.`id_comment` DESC');
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
			WHERE `id_comment` = '.(int) $this->id
        );

        $return = parent::delete();

        return $return;
    }

    /**
    * Count number of comments for a given prdduct
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

}
