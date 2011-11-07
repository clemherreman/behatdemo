Feature: Square perimeter
  In order to get the perimeter of a square
  As a website user
  I need to be able to input side size of a square and get its perimeter
  
  Scenario: Inputting a valid side size
    Given I am on "/square"
    When I fill in "side" with "6"
    And I press "Calculate"
    Then I should see "Perimeter: 36 cm"

  Scenario: Inputting a valid side size
    Given I am on "/square"
    When I fill in "side" with "0"
    And I press "Calculate"
    Then I should see an ".error" element
  
  Scenario: Inputting a valid side size
    Given I am on "/square"
    When I fill in "side" with "not a number"
    And I press "Calculate"
    Then I should see an ".error" element