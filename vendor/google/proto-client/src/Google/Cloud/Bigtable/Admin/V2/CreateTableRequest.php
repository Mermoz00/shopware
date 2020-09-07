<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CreateTable][google.bigtable.admin.v2.BigtableTableAdmin.CreateTable]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateTableRequest</code>
 */
class CreateTableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `<parent>/tables/foobar`.
     *
     * Generated from protobuf field <code>string table_id = 2;</code>
     */
    private $table_id = '';
    /**
     * The Table to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 3;</code>
     */
    private $table = null;
    /**
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                => {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      => {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) => {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      => {"customer_2"}.`
     *     - Tablet 5 `[other, )                => {"other", "zz"}.`
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     */
    private $initial_splits;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `<parent>/tables/foobar`.
     *
     * Generated from protobuf field <code>string table_id = 2;</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `<parent>/tables/foobar`.
     *
     * Generated from protobuf field <code>string table_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

    /**
     * The Table to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 3;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * The Table to create.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table table = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Table $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Table::class);
        $this->table = $var;

        return $this;
    }

    /**
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                => {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      => {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) => {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      => {"customer_2"}.`
     *     - Tablet 5 `[other, )                => {"other", "zz"}.`
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialSplits()
    {
        return $this->initial_splits;
    }

    /**
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                => {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      => {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) => {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      => {"customer_2"}.`
     *     - Tablet 5 `[other, )                => {"other", "zz"}.`
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\CreateTableRequest_Split[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialSplits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\CreateTableRequest_Split::class);
        $this->initial_splits = $arr;

        return $this;
    }

}

