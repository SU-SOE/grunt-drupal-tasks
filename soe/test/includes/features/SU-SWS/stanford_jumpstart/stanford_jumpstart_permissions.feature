Feature: Stanford Sites Jumpstart Permissions
  In order to ensure that functionality of the module
  I want to ensure the permissions are accurate.

  @api @safe
  Scenario: Validate permissions are configured correctly
    Given the "stanford_jumpstart_permissions" module is enabled
    Then I run drush "rls" "--filter='access administration pages'"
    Then drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access bean overview'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access content'"
    And drush output should contain "administrator"
    And drush output should contain "anonymous user"
    And drush output should contain "authenticated user"
    Then I run drush "rls" "--filter='access content overview'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access contextual links'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access jumpstart features'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access jumpstart help'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='access user profiles'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer bean settings'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer bean types'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer beans'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer block classes'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer blocks'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer content types'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer contexts'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer menu'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer meta tags'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer nodes'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer pathauto'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer permissions'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer redirects'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='administer site configuration'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer stanford homepage'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='administer users'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='bypass node access'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='cancel account'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='context ajax block access'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='create stanford_landing_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='create stanford_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='create url aliases'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='delete any stanford_landing_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='delete any stanford_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='delete own stanford_landing_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='delete own stanford_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='delete revisions'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='edit any stanford_landing_page content'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='edit any stanford_page content'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='edit bean view mode'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='edit meta tags'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='edit own stanford_landing_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='edit own stanford_page content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='flush caches'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='jumpstart assign administrator role'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='jumpstart use full block'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='revert revisions'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='search content'"
    And drush output should contain "anonymous user"
    And drush output should contain "authenticated user"
    Then I run drush "rls" "--filter='see disabled homepage options'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='see enabled homepage options'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='select account cancellation method'"
    And drush output should contain "administrator"
    Then I run drush "rls" "--filter='show format selection for bean'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='show format selection for field_collection_item'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='show format selection for node'"
    And drush output should contain "administrator"
    And drush output should contain "authenticated user"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='show format selection for taxonomy_term'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='show format selection for user'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='stanford jumpstart admin shortcuts'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='stanford jumpstart clear caches'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='use text format content_editor_text_format'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='use text format filtered_html'"
    And drush output should contain "administrator"
    And drush output should contain "anonymous user"
    And drush output should contain "authenticated user"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='use text format full_html'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='view bean page'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='view bean revisions'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='view own unpublished content'"
    And drush output should contain "administrator"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='view revisions'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
    Then I run drush "rls" "--filter='view the administration theme'"
    And drush output should contain "administrator"
    And drush output should contain "editor"
    And drush output should contain "site owner"
