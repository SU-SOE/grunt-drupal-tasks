Feature: Ensure instructions on the Examples page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "pattern-catalog/examples"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Magazine article with a YouTube video"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Magazine article with a SoundCloud audio file"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Landing page with blocks, no images"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Landing page with list, no images"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Landing page, Postcard Linked"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "td" element
    Then I should see the text "Landing page, cards, no images"
