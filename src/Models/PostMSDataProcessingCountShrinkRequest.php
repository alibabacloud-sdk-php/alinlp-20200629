<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostMSDataProcessingCountShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataIdsShrink;

    /**
     * @example 103654
     *
     * @var int
     */
    public $dataImportId;

    /**
     * @example 325
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'dataIdsShrink' => 'DataIds',
        'dataImportId'  => 'DataImportId',
        'serviceId'     => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataIdsShrink) {
            $res['DataIds'] = $this->dataIdsShrink;
        }
        if (null !== $this->dataImportId) {
            $res['DataImportId'] = $this->dataImportId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostMSDataProcessingCountShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataIds'])) {
            $model->dataIdsShrink = $map['DataIds'];
        }
        if (isset($map['DataImportId'])) {
            $model->dataImportId = $map['DataImportId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
