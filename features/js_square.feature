Feature: Square perimeter
  In order to get the perimeter of a square
  As a website user
  I need to be able to input side size of a square and get its perimeter
  
  @javascript
  Scenario: Inputting a valid side size
    Given I am on "/js-square"
    When I fill in "side" with "6"
    And I press "Calculate"
    And I wait for the result to appear
    And I wait a little
    Then I should see "Perimeter (using js): 24 cm"
