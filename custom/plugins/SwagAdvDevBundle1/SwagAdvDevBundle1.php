<?php

namespace SwagAdvDevBundle1;

use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Plugin;
use Doctrine\Common\EventSubscriber;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use Shopware\Components\Model\ModelManager;
use Shopware\Models\Article\Article;

class SwagAdvDevBundle1 extends Plugin
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            Events::preUpdate,
            Events::postUpdate,
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
    /**
     * @param LifecycleEventArgs $arguments
     */
    public function preUpdate(LifecycleEventArgs $arguments)
    {
        /** @var ModelManager $modelManager */
        $modelManager = $arguments->getEntityManager();

        $model = $arguments->getEntity();

        if (!$model instanceof Article) {
            return;
        }

        // modify product data
    }

    /**
     * @param LifecycleEventArgs $arguments
     */
    public function postUpdate(LifecycleEventArgs $arguments)
    {
        /** @var ModelManager $modelManager */
        $modelManager = $arguments->getEntityManager();

        $model = $arguments->getEntity();

        // modify models or do some other fancy stuff
    }
}
