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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig */
class __TwigTemplate_c3f7d2e85447804822e74e6802466b9a9c56040248c6c31c2dabd3df99da1472 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'cms_tool_serp' => [$this, 'block_cms_tool_serp'],
            'cms_page_form_rest' => [$this, 'block_cms_page_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'errors');
        echo "

        ";
        // line 37
        $context["invalidCharsHint"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}");
        // line 38
        echo "
        ";
        // line 39
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "page_category_id", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page category", [], "Admin.Design.Feature")]);
        // line 41
        echo "

        ";
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "help" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Used in the h1 page tag, and as the default title tag value.", [], "Admin.Design.Help") . " ") .         // line 46
($context["invalidCharsHint"] ?? $this->getContext($context, "invalidCharsHint")))]);
        // line 47
        echo "

        ";
        // line 49
        $this->displayBlock('cms_tool_serp', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Global"), "help" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Used to override the title tag value. If left blank, the default title value is used.", [], "Admin.Design.Help") . " ") .         // line 66
($context["invalidCharsHint"] ?? $this->getContext($context, "invalidCharsHint")))]);
        // line 67
        echo "

        ";
        // line 69
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 71
($context["invalidCharsHint"] ?? $this->getContext($context, "invalidCharsHint"))]);
        // line 72
        echo "

        ";
        // line 74
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "meta_keyword", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help") . " ") .         // line 77
($context["invalidCharsHint"] ?? $this->getContext($context, "invalidCharsHint")))]);
        // line 78
        echo "

        ";
        // line 80
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "friendly_url", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters and the hyphen (-) character are allowed.", [], "Admin.Design.Feature")]);
        // line 83
        echo "

        ";
        // line 85
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "content", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page content", [], "Admin.Design.Feature")]);
        // line 87
        echo "

        ";
        // line 89
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "is_indexed_for_search", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Indexation by search engines", [], "Admin.Design.Feature")]);
        // line 91
        echo "

        ";
        // line 93
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "is_displayed", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Displayed", [], "Admin.Global")]);
        // line 95
        echo "

        ";
        // line 97
        if ($this->getAttribute(($context["cmsPageForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 98
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 100
            echo "
        ";
        }
        // line 102
        echo "
        ";
        // line 103
        $this->displayBlock('cms_page_form_rest', $context, $blocks);
        // line 106
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ["id_cms_category" => ($context["cmsCategoryParentId"] ?? $this->getContext($context, "cmsCategoryParentId"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>

      <div class=\"d-inline-flex float-right\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>

      <button type=\"submit\" class=\"btn btn-primary ml-3\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_cms_tool_serp($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_tool_serp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_tool_serp"));

        // line 50
        echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO preview", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              <div id=\"serp-app\" data-cms-url=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["cmsUrl"] ?? $this->getContext($context, "cmsUrl")), "html", null, true);
        echo "\"></div>
              <small class=\"form-text\">
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is a preview of how your page will appear in search engine results.", [], "Admin.Global"), "html", null, true);
        echo "
              </small>
            </div>
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_cms_page_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_page_form_rest"));

        // line 104
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageForm"] ?? $this->getContext($context, "cmsPageForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 104,  231 => 103,  216 => 57,  211 => 55,  205 => 52,  201 => 50,  192 => 49,  180 => 126,  172 => 121,  166 => 118,  157 => 112,  153 => 111,  146 => 106,  144 => 103,  141 => 102,  137 => 100,  134 => 98,  132 => 97,  128 => 95,  126 => 93,  122 => 91,  120 => 89,  116 => 87,  114 => 85,  110 => 83,  108 => 80,  104 => 78,  102 => 77,  101 => 74,  97 => 72,  95 => 71,  94 => 69,  90 => 67,  88 => 66,  87 => 63,  84 => 62,  82 => 49,  78 => 47,  76 => 46,  75 => 43,  71 => 41,  69 => 39,  66 => 38,  64 => 37,  59 => 35,  52 => 31,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
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

{{ form_start(cmsPageForm) }}
  <div class=\"card\">
    <div class=\"card-header\">
      {{ 'Page'|trans({}, 'Admin.Shopparameters.Feature') }}
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ form_errors(cmsPageForm) }}

        {% set invalidCharsHint = 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>={}' %}

        {{ ps.form_group_row(cmsPageForm.page_category_id, {}, {
          'label': 'Page category'|trans({}, 'Admin.Design.Feature'),
          }) }}

        {{ ps.form_group_row(cmsPageForm.title, {}, {
          'label': 'Title'|trans({}, 'Admin.Global'),
          'help': 'Used in the h1 page tag, and as the default title tag value.'|trans({}, 'Admin.Design.Help')
          ~ ' ' ~ invalidCharsHint
          }) }}

        {% block cms_tool_serp %}
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'SEO preview'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              <div id=\"serp-app\" data-cms-url=\"{{ cmsUrl }}\"></div>
              <small class=\"form-text\">
                {{ 'Here is a preview of how your page will appear in search engine results.'|trans({}, 'Admin.Global') }}
              </small>
            </div>
          </div>
        {% endblock %}

        {{ ps.form_group_row(cmsPageForm.meta_title, {}, {
          'label': 'Meta title'|trans({}, 'Admin.Global'),
          'help': 'Used to override the title tag value. If left blank, the default title value is used.'|trans({}, 'Admin.Design.Help')
          ~ ' ' ~ invalidCharsHint
          }) }}

        {{ ps.form_group_row(cmsPageForm.meta_description, {}, {
          'label': 'Meta description'|trans({}, 'Admin.Global'),
          'help': invalidCharsHint
          }) }}

        {{ ps.form_group_row(cmsPageForm.meta_keyword, {}, {
          'label': 'Meta keywords'|trans({}, 'Admin.Global'),
          'help': 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help')
          ~ ' ' ~ invalidCharsHint
          }) }}

        {{ ps.form_group_row(cmsPageForm.friendly_url, {}, {
          'label': 'Friendly URL'|trans({}, 'Admin.Global'),
          'help': 'Only letters and the hyphen (-) character are allowed.'|trans({}, 'Admin.Design.Feature')
          }) }}

        {{ ps.form_group_row(cmsPageForm.content, {}, {
          'label': 'Page content'|trans({}, 'Admin.Design.Feature'),
          }) }}

        {{ ps.form_group_row(cmsPageForm.is_indexed_for_search, {}, {
          'label': 'Indexation by search engines'|trans({}, 'Admin.Design.Feature'),
          }) }}

        {{ ps.form_group_row(cmsPageForm.is_displayed, {}, {
          'label': 'Displayed'|trans({}, 'Admin.Global'),
          }) }}

        {% if cmsPageForm.shop_association is defined %}
          {{ ps.form_group_row(cmsPageForm.shop_association, {}, {
            'label': 'Shop association'|trans({}, 'Admin.Global')
            }) }}
        {% endif %}

        {% block cms_page_form_rest %}
          {{ form_rest(cmsPageForm) }}
        {% endblock %}
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"{{ path('admin_cms_pages_index', {'id_cms_category' : cmsCategoryParentId}) }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
      </div>

      <div class=\"d-inline-flex float-right\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\">
        {{ 'Save and preview'|trans({}, 'Admin.Actions') }}
      </button>

      <button type=\"submit\" class=\"btn btn-primary ml-3\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>

</div>
{{ form_end(cmsPageForm) }}
", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/form.html.twig");
    }
}
