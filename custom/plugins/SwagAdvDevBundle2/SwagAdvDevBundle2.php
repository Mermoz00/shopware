<?php

namespace SwagAdvDevBundle2;

use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Plugin;

class SwagAdvDevBundle2 extends Plugin
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            // todo implement API resource "Bundle"
            // todo register it via the services.xml
            // use the Frontend/BundleTest controller for testing the resource class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function install(Plugin\Context\InstallContext $context)
    {
        $this->updateSchema();
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall(Plugin\Context\UninstallContext $context)
    {
        $tool = new SchemaTool($this->container->get('models'));
        $classes = $this->getModelMetaData();
        $tool->dropSchema($classes);
    }

    private function updateSchema()
    {
        $tool = new SchemaTool($this->container->get('models'));
        $classes = $this->getModelMetaData();

        try {
            $tool->dropSchema($classes);
        } catch (\Exception $e) {
        }

        $tool->createSchema($classes);
        $this->createDemoData();
    }

    /**
     * @return array
     */
    private function getModelMetaData()
    {
        return [$this->container->get('models')->getClassMetadata(Models\Bundle::class)];
    }

    private function createDemoData()
    {
        $connection = $this->container->get('dbal_connection');

        $connection->executeUpdate('DELETE FROM s_bundles');
        $connection->executeUpdate('DELETE FROM s_bundle_products');

        $productInsert = $connection->prepare(
            'INSERT INTO s_bundle_products (bundle_id, product_id) VALUES (:bundleId, :productId)'
        );

        for ($i = 1; $i < 20; ++$i) {
            $connection->insert(
                's_bundles',
                [
                    'name' => 'Bundle' . $i,
                    'active' => true,
                ]
            );
            $bundleId = $connection->lastInsertId('s_bundles');

            $products = $connection->executeQuery('SELECT id FROM s_articles ORDER BY RAND() LIMIT ' . mt_rand(4, 5))
                ->fetchAll(\PDO::FETCH_COLUMN);
            foreach ($products as $product) {
                $productInsert->execute([':bundleId' => $bundleId, ':productId' => $product]);
            }
        }
    }
}
