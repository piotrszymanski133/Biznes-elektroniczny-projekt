<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig */
class __TwigTemplate_c9b9cf455b27baa07f234a98e579292d2f89f0ca7ce322c058cf597d980e0542 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'language_form_rest' => [$this, 'block_language_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["languageForm"] ?? $this->getContext($context, "languageForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">language</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Languages", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["languageForm"] ?? $this->getContext($context, "languageForm")), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 40
        echo "

      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "iso_code", []), ["attr" => ["maxlength" => 2]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISO code", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Two-letter ISO code (e.g. FR, EN, DE).", [], "Admin.International.Help")]);
        // line 49
        echo "

      ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "tag_ietf", []), ["attr" => ["maxlength" => 5]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language code", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IETF language tag (e.g. en-US, pt-BR).", [], "Admin.International.Help")]);
        // line 58
        echo "

      ";
        // line 60
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "short_date_format", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date format", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Short date format (e.g., Y-m-d).", [], "Admin.International.Help")]);
        // line 63
        echo "

      ";
        // line 65
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "full_date_format", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date format (full)", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Full date format (e.g., Y-m-d H:i:s).", [], "Admin.International.Help")]);
        // line 68
        echo "

      ";
        // line 70
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "flag_image", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Flag", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload the country flag from your computer.", [], "Admin.International.Help")]);
        // line 73
        echo "

      ";
        // line 75
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "no_picture_image", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("\"No-picture\" image", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image is displayed when \"no picture is found\".", [], "Admin.International.Help")]);
        // line 78
        echo "

      ";
        // line 80
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "is_rtl", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is RTL language", [], "Admin.International.Feature"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable if this language is read from right to left.", [], "Admin.International.Help") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(Experimental: your theme must be compliant with RTL languages).", [], "Admin.International.Help"))]);
        // line 83
        echo "

      ";
        // line 85
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "is_active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate this language.", [], "Admin.International.Feature")]);
        // line 88
        echo "

      ";
        // line 90
        if ($this->getAttribute(($context["languageForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 91
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? $this->getContext($context, "languageForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 93
            echo "
      ";
        }
        // line 95
        echo "
      ";
        // line 96
        $this->displayBlock('language_form_rest', $context, $blocks);
        // line 99
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_languages_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["languageForm"] ?? $this->getContext($context, "languageForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_language_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "language_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "language_form_rest"));

        // line 97
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["languageForm"] ?? $this->getContext($context, "languageForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 97,  166 => 96,  154 => 110,  147 => 106,  141 => 103,  137 => 102,  132 => 99,  130 => 96,  127 => 95,  123 => 93,  120 => 91,  118 => 90,  114 => 88,  112 => 85,  108 => 83,  106 => 80,  102 => 78,  100 => 75,  96 => 73,  94 => 70,  90 => 68,  88 => 65,  84 => 63,  82 => 60,  78 => 58,  76 => 51,  72 => 49,  70 => 42,  66 => 40,  64 => 38,  59 => 36,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(languageForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">language</i>
    {{ 'Languages'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(languageForm) }}

      {{ ps.form_group_row(languageForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(languageForm.iso_code, {
        'attr': {
          'maxlength': 2
        }
      }, {
        'label': 'ISO code'|trans({}, 'Admin.International.Feature'),
        'help': 'Two-letter ISO code (e.g. FR, EN, DE).'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.tag_ietf, {
        'attr': {
          'maxlength': 5
        }
      }, {
        'label': 'Language code'|trans({}, 'Admin.International.Feature'),
        'help': 'IETF language tag (e.g. en-US, pt-BR).'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.short_date_format, {}, {
        'label': 'Date format'|trans({}, 'Admin.International.Feature'),
        'help': 'Short date format (e.g., Y-m-d).'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.full_date_format, {}, {
        'label': 'Date format (full)'|trans({}, 'Admin.International.Feature'),
        'help': 'Full date format (e.g., Y-m-d H:i:s).'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.flag_image, {}, {
        'label': 'Flag'|trans({}, 'Admin.International.Feature'),
        'help': 'Upload the country flag from your computer.'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.no_picture_image, {}, {
        'label': '\"No-picture\" image'|trans({}, 'Admin.International.Feature'),
        'help': 'Image is displayed when \"no picture is found\".'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.is_rtl, {}, {
        'label': 'Is RTL language'|trans({}, 'Admin.International.Feature'),
        'help': 'Enable if this language is read from right to left.'|trans({}, 'Admin.International.Help') ~ '(Experimental: your theme must be compliant with RTL languages).'|trans({}, 'Admin.International.Help')
      }) }}

      {{ ps.form_group_row(languageForm.is_active, {}, {
        'label': 'Status'|trans({}, 'Admin.Global'),
        'help': 'Activate this language.'|trans({}, 'Admin.International.Feature')
      }) }}

      {% if languageForm.shop_association is defined %}
        {{ ps.form_group_row(languageForm.shop_association, {}, {
          'label': 'Shop association'|trans({}, 'Admin.Global')
        }) }}
      {% endif %}

      {% block language_form_rest %}
        {{ form_rest(languageForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_languages_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(languageForm) }}
", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Language/Blocks/form.html.twig");
    }
}
