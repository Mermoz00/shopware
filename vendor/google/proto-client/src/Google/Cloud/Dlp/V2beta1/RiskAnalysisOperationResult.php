<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of a risk analysis
 * [`Operation`](/dlp/docs/reference/rest/v2beta1/inspect.operations)
 * request.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.RiskAnalysisOperationResult</code>
 */
class RiskAnalysisOperationResult extends \Google\Protobuf\Internal\Message
{
    protected $result;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.NumericalStatsResult numerical_stats_result = 3;</code>
     * @return \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_NumericalStatsResult
     */
    public function getNumericalStatsResult()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.NumericalStatsResult numerical_stats_result = 3;</code>
     * @param \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_NumericalStatsResult $var
     * @return $this
     */
    public function setNumericalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_NumericalStatsResult::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @return \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_CategoricalStatsResult
     */
    public function getCategoricalStatsResult()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @param \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_CategoricalStatsResult $var
     * @return $this
     */
    public function setCategoricalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_CategoricalStatsResult::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult k_anonymity_result = 5;</code>
     * @return \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_KAnonymityResult
     */
    public function getKAnonymityResult()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult k_anonymity_result = 5;</code>
     * @param \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_KAnonymityResult $var
     * @return $this
     */
    public function setKAnonymityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_KAnonymityResult::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult l_diversity_result = 6;</code>
     * @return \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_LDiversityResult
     */
    public function getLDiversityResult()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult l_diversity_result = 6;</code>
     * @param \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_LDiversityResult $var
     * @return $this
     */
    public function setLDiversityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\RiskAnalysisOperationResult_LDiversityResult::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

