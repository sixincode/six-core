<?php
  if (! function_exists('base_components')) {
      function base_components()
      {
        return 'six-core::components';
      }
  }

  if (! function_exists('base_layouts')) {
      function base_layouts()
      {
        return 'six-core::components';
      }
  }

  if (! function_exists('base_headers')) {
      function base_headers()
      {
        return 'six-core::components';
      }
  }

  if (! function_exists('base_navigations')) {
      function base_navigations()
      {
        return 'six-core::components';
      }
  }

  if (! function_exists('base_sidebars')) {
      function base_sidebars()
      {
        return 'six-core::components';
      }
  }

  if (! function_exists('base_footers')) {
      function base_footers()
      {
          return 'six-core::components';
      }
  }

  // TABLES CHECK

  if(function_exists('tableUsers')) {
    function tableUsers()
    {
      return config('six-core.table_names.users');
    }
  }

  if(function_exists('tableLogins')) {
    function tableLogins()
    {
      return config('six-core.table_names.logins');
    }
  }


  if (! function_exists('has_translations')) {
      function has_translations()
      {
          return config('six-core-features.hasTranslationFeatures');
      }
  }

  if (! function_exists('lang_route')) {
      function lang_route()
      {
        return config('six-core.lang_route');
      }
  }

  if (! function_exists('locale_langs')) {
      function locale_langs()
      {
        return array_keys(config('six-core.locale_langs'));
      }
  }

  if (! function_exists('default_lang')) {
      function default_lang()
      {
        return config('six-core.default_lang');
      }
  }

  if (! function_exists('hasUserFeatures')) {
    function hasUserFeatures()
    {
        return config('six-core-features.hasUserFeatures');
    }
  }

  if (! function_exists('hasRegistrationFeatures')) {
    function hasRegistrationFeatures()
    {
        return (
          config('six-core-features.hasUserFeatures')
          && config('six-core-features.hasRegistrationFeatures')
        );
    }
  }

  if (! function_exists('hasTermsAndPrivacyPolicyFeatures')) {
    function hasTermsAndPrivacyPolicyFeatures()
    {
        return config('six-core-features.hasTermsAndPrivacyPolicyFeatures');
    }
  }

  if (! function_exists('hasApiFeatures')) {
    function hasApiFeatures()
    {
        return config('six-core-features.hasApiFeatures');
    }
  }

  if (! function_exists('hasTeamFeatures')) {
    function hasTeamFeatures()
    {
        return config('six-core-features.hasTeamFeatures');
    }
  }

  if (! function_exists('hasTeamOwnershipOnCreateFeatures')) {
    function hasTeamOwnershipOnCreateFeatures()
    {
        return config('six-core-features.hasTeamOwnershipOnCreateFeatures');
    }
  }

  if (! function_exists('hasTeamAppDefaultMembershipFeatures')) {
    function hasTeamAppDefaultMembershipFeatures()
    {
        return config('six-core-features.hasTeamAppDefaultMembershipFeatures');
    }
  }

  if (! function_exists('hasSubscriptionFeatures')) {
    function hasSubscriptionFeatures()
    {
        return config('six-core-features.hasSubscriptionFeatures');
    }
  }

  // JETSTREAM AND FORTIFY PROCESSES
         // Views
   if (! function_exists('hasLoginView')) {
     function hasLoginView()
     {
       return view('six-core::central.auth.login');
     }
   }

   if (! function_exists('hasRegisterView')) {
     function hasRegisterView()
     {
       return view('six-core::central.auth.register');
     }
   }

   if (! function_exists('hasVerifyEmailView')) {
     function hasVerifyEmailView()
     {
       return view('six-core::central.auth.verify-email');
     }
   }

   if (! function_exists('hasTwoFactorChallengeView')) {
     function hasTwoFactorChallengeView()
     {
       return view('six-core::central.auth.two-factor-challenge');
     }
   }

   if (! function_exists('hasRequestPasswordResetLinkView')) {
     function hasRequestPasswordResetLinkView()
     {
       return view('six-core::central.auth.forgot-password');
     }
   }

   if (! function_exists('hasResetPasswordView')) {
     function hasResetPasswordView()
     {
       return view('six-core::central.auth.reset-password');
     }
   }

   if (! function_exists('hasConfirmPasswordView')) {
     function hasConfirmPasswordView()
     {
       return view('six-core::central.auth.confirm-password');
     }
   }

   if (! function_exists('hasCreateNewUserClass')) {
     function hasCreateNewUserClass()
     {
       return Sixincode\SixCore\Actions\SixCoreOnBoardNewUser::class;
     }
   }
