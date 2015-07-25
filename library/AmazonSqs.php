<?php
/**
 * Stakhanovist
 *
 * @link        https://github.com/stakhanovist/queue-amazon-sqs
 * @copyright   Copyright (c) 2015, Stakhanovist
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Stakhanovist\Queue\Adapter\AmazonSqs;

use Aws\Sqs\SqsClient;
use Stakhanovist\Queue\Adapter\AbstractAdapter;
use Stakhanovist\Queue\QueueInterface;
use Stakhanovist\Queue\Parameter\ReceiveParametersInterface;
use Zend\Stdlib\MessageInterface;
use Stakhanovist\Queue\Parameter\SendParametersInterface;

/**
 * Class AmazonSqs
 *
 * @see http://docs.aws.amazon.com/aws-sdk-php/v2/guide/configuration.html#client-configuration-options
 */
class AmazonSqs extends AbstractAdapter
{

    protected $defaultOptions = [
        'clientOptions' => [],
        'queueAttributes' => []
    ];

    /**
     * @var SqsClient
     */
    protected $client;

    public function connect()
    {
        $this->client = SqsClient::factory($this->getOptions()['clientOptions']);
        return true;
    }

    public function getQueueId($name)
    {
    }

    public function queueExists($name)
    {
    }

    public function createQueue($name)
    {
        $this->client->createQueue(
            [
                'QueueName' => $name,
                'Attributes' => $this->defaultOptions['queueAttributes']
            ]
        );
    }

    public function deleteQueue($name)
    {
    }

    public function sendMessage(QueueInterface $queue, MessageInterface $msg, SendParametersInterface $params = null)
    {
    }

    public function receiveMessages(QueueInterface $queue, $maxMsgs = null, ReceiveParametersInterface $params = null)
    {
    }
}
