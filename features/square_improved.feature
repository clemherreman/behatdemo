Feature: Square perimeter
  In order check that the perimeter is calculated
  As a website user
  I need to be able to input side size of a square and get its perimeter
  
  Scenario Outline: Inputting a valids side sizes
    Given I am on "/square"
    When I fill in "side" with "<size>"
    And I press "Calculate"
    Then I should see "Perimeter: <perimeter> cm"

    Examples: 
      | size | perimeter |
      |  6   |  24       |
      |  2.5 |  10       |
      
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