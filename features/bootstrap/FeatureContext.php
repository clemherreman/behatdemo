<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once realpath(__DIR__) . '/../../vendor/mink/autoload.php.dist';

/**
* Features context.
*/
class FeatureContext extends Behat\Mink\Behat\Context\MinkContext
{
    /**  
     * @Then /^I wait for the result to appear$/
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        $this->getSession()->wait(10000, "$('#sidebar').text() != ''");
    }
    
    /**  
     * @Then /^I wait a little$/
     */
    public function iWaitALittle()
    {
        $this->getSession()->wait(10000, "false");
    }
}

