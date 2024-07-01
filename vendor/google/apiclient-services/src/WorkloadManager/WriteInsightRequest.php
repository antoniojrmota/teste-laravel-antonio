<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\WorkloadManager;

class WriteInsightRequest extends \Google\Model
{
  protected $insightType = Insight::class;
  protected $insightDataType = '';
  /**
   * @var string
   */
  public $instanceId;
  /**
   * @var string
   */
  public $requestId;

  /**
   * @param Insight
   */
  public function setInsight(Insight $insight)
  {
    $this->insight = $insight;
  }
  /**
   * @return Insight
   */
  public function getInsight()
  {
    return $this->insight;
  }
  /**
   * @param string
   */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /**
   * @return string
   */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /**
   * @param string
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WriteInsightRequest::class, 'Google_Service_WorkloadManager_WriteInsightRequest');
