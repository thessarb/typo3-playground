<?php
namespace Contenance\Sitepackage\Controller;

use Contenance\Sitepackage\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class StoreInventoryController
 *
 * @package MyVendor\StoreInventory\Controller
 */
class StoreInventoryController extends ActionController
{

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * Inject the product repository
     *
     * @param \MyVendor\StoreInventory\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * list Action
     *
     * @return void
     */
    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }

    /**
     * store Action
     * 
     * @return void
     */
    public function storeAction(Product $product)
    {
        $request = $_POST["tx_youtubedemo_inventorylist"]["product"]; 
        $product->setName($request['name']);
        $product->setDescription($request['description']);
        $product->setQuantity($request['quantity']);
        $this->productRepository->add($product);
        return $this->redirect('list');
    }

    /**
     * list Action
     *
     * @return void
     */
    public function editAction()
    {
        $id = $_POST["tx_youtubedemo_inventorylist"]["product"]["uid"]; 
        $product = $this->productRepository->findByUid($id);
        $this->view->assign('product', $product);
    }

    public function updateAction()
    {
        $request = $_POST["tx_youtubedemo_inventorylist"]["product"]; 
        $product = $this->productRepository->findByUid($request['uid']);
        $product->setName($request['name']);
        $product->setDescription($request['description']);
        $product->setQuantity($request['quantity']);
        $this->productRepository->update($product);
        return $this->redirect('list');
    }

        /**
     * list Action
     *
     * @return void
     */
    public function deleteAction()
    {
        $id = $_POST["tx_youtubedemo_inventorylist"]["product"]["uid"]; 
        $product = $this->productRepository->findByUid($id);
        $this->productRepository->remove($product);
        return $this->redirect('list');
    }
}