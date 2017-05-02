<?php
/**
 * 2017 taorai.asia
 *
 * @author    steven
 * @copyright 2017 taorai.asia
 */
namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * This class will provide data from DB / ORM about Product, for both Front and Admin interfaces.
 */
class ProductCommentDataProvider
{
    /**
     * Get a new ProductCommentCore instance
     *
     * @return object product
     */
    public function getProductCommentInstance()
    {
        return new \ProductCommentCore();
    }

    /**
     * Get a product comment
     *
     * @param int $id_product
     * @param object|null $context
     *
     * @throws \LogicException If the product id is not set
     *
     * @return \ProductCommentCore $product_comment
     */
    public function getProductComments($id_product, $context = null)
    {
        if (!$id_product) {
            throw new \LogicException('You need to provide a product id', 5002);
        }

        $product_comment = \ProductCommentCore::getComments($id_product);

        return $product_comment;
    }

     /**
     * Get a product comment from order
     *
     * @param int $id_product
     * @param int $id_order
     * @param object|null $context
     *
     * @throws \LogicException If the product id is not set
     *
     * @return \ProductCommentCore $product_comment
     */
    public function getProductCommentInOrder($id_product, $id_order, $context = null)
    {
        if (!$id_product) {
            throw new \LogicException('You need to provide a product id', 5002);
        }
        if (!$id_order) {
            throw new \LogicException('You need to provide an order id', 5002);
        }

        $product_comment = \ProductCommentCore::getCommentInOrder($id_product, $id_order);

        return $product_comment;
    }
}
