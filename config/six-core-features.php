<?php

return [
  'hasUserFeatures'                  => false,
  'hasRegistrationFeatures'          => false,
  'hasApiFeatures'                   => false,
  'hasTermsAndPrivacyPolicyFeatures' => true,
  'hasTeamFeatures'                  => true,
  'hasTeamOwnershipOnCreateFeatures' => true,
  'hasTeamAppDefaultMembershipFeatures' => true,
  'hasSubscriptionFeatures'          => false,
  'hasTranslationFeatures'           => true,

        // Use 'hive-apollo::components' as base for following components:
  'base_components'                  => true,
  'base_layouts'                     => true,
  'base_headers'                     => true,
  'base_navigations'                 => true,
  'base_sidebars'                    => true,
  'base_footers'                     => true,

        // Allow following features:

        // Allow following views:
  'hasLoginView'                     => false,
  'hasRegisterView'                  => false,
  'hasVerifyEmailView'               => false,
  'hasTwoFactorChallengeView'        => false,
  'hasRequestPasswordResetLinkView'  => false,
  'hasResetPasswordView'             => false,
  'hasConfirmPasswordView'           => false,
  'hasCreateNewUserClas'             => false,
];
