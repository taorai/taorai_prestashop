<?php
/**
 * 2017 taorai.asia
 *
 * product comment admin controller
 *
 * @author    steven
 */


class AdminProductCommentsControllerCore extends AdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'product_comments';
        $this->className = 'ProductComment';
        $this->addRowAction('delete');

        parent::__construct();

        $this->_select = 'CONCAT(c.`firstname`, \'. \', c.`lastname`) AS `customer_name`';
        $this->_join = 'LEFT JOIN `'._DB_PREFIX_.'customer` c ON a.`id_customer`=c.`id_customer`';
        $this->_where = 'AND 1';
        $this->_orderBy = 'id_product_comments';
        $this->_orderWay = 'DESC';
        $this->_use_found_rows = false;
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->trans('Delete selected', array(), 'Admin.Notifications.Info'),
                'confirm' => $this->trans('Delete selected items?', array(), 'Admin.Notifications.Info'),
                'icon' => 'icon-trash'
            )
        );

        $this->fields_list = array(
            'id_product_comments' => array(
                'title' => $this->trans('Comment ID', array(), 'Admin.Global')
            ),
            'date_add' => array(
                'title' => $this->trans('Date', array(), 'Admin.Global'),
                'type' => 'datetime',
                'align' => 'right',
                'filter_key' => 'a!date_add'
            ),
            'content' => array(
                'title' => $this->trans('Comment', array(), 'Admin.Global'),
                'filter_key' => 'content',
                'orderby' => false,
            ),
            'customer_name' => array(
                'title' => $this->trans('Customer', array(), 'Admin.Global'),
                'filter_key' => 'customer_name',
                'tmpTableFilter' => true,
                'orderby' => false
            ),
            'id_order' => array(
                'title' => $this->trans('Order ID', array(), 'Admin.Global'),
                'orderby' => false
            ),
            'id_product' => array(
                'title' => $this->trans('Product ID', array(), 'Admin.Global'),
                'orderby' => false
            ),
        );
    }

    /**
     * Toolbar initialisation
     * @return bool Force true (Hide New button)
     */
    public function initToolbar()
    {
        return true;
    }

}
