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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig */
class __TwigTemplate_b09c4c5d824302e6d045b5fdc3323db8087a43afd2061c7b879d8afdf8ee42db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'category_form' => [$this, 'block_category_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_category_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), 'form_start');
        echo "

  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CMS Category", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        ";
        // line 38
        $context["invalidCharactersForCatalogLabel"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . "<>;=#{}");
        // line 39
        echo "        ";
        $context["invalidCharactersForNameLabel"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . "<>={}");
        // line 40
        echo "
        ";
        // line 41
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" =>         // line 43
($context["invalidCharactersForCatalogLabel"] ?? $this->getContext($context, "invalidCharactersForCatalogLabel"))]);
        // line 44
        echo "

        ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "is_displayed", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Displayed", [], "Admin.Global")]);
        // line 48
        echo "

        ";
        // line 50
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "parent_category", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Parent category", [], "Admin.Design.Feature")]);
        // line 52
        echo "

        ";
        // line 54
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global")]);
        // line 56
        echo "

        ";
        // line 58
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "meta_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta title", [], "Admin.Global"), "help" =>         // line 60
($context["invalidCharactersForNameLabel"] ?? $this->getContext($context, "invalidCharactersForNameLabel"))]);
        // line 61
        echo "

        ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
($context["invalidCharactersForNameLabel"] ?? $this->getContext($context, "invalidCharactersForNameLabel"))]);
        // line 66
        echo "

        ";
        // line 68
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "meta_keywords", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 70
($context["invalidCharactersForNameLabel"] ?? $this->getContext($context, "invalidCharactersForNameLabel"))]);
        // line 71
        echo "

        ";
        // line 73
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "friendly_url", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URL", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]);
        // line 76
        echo "

        ";
        // line 78
        if ($this->getAttribute(($context["cmsPageCategoryForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 79
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 81
            echo "
        ";
        }
        // line 83
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ["id_cms_category" => ($context["cmsCategoryParentId"] ?? $this->getContext($context, "cmsCategoryParentId"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>

  </div>

  ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), 'rest');
        echo "
  ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmsPageCategoryForm"] ?? $this->getContext($context, "cmsPageCategoryForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 101,  176 => 100,  167 => 94,  160 => 90,  156 => 89,  148 => 83,  144 => 81,  141 => 79,  139 => 78,  135 => 76,  133 => 73,  129 => 71,  127 => 70,  126 => 68,  122 => 66,  120 => 65,  119 => 63,  115 => 61,  113 => 60,  112 => 58,  108 => 56,  106 => 54,  102 => 52,  100 => 50,  96 => 48,  94 => 46,  90 => 44,  88 => 43,  87 => 41,  84 => 40,  81 => 39,  79 => 38,  71 => 33,  63 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% block category_form %}
  {{ form_start(cmsPageCategoryForm) }}

  <div class=\"card\">
    <div class=\"card-header\">
      {{ 'CMS Category'|trans({}, 'Admin.Design.Feature') }}
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">

        {% set invalidCharactersForCatalogLabel = 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ '<>;=#{}' %}
        {% set invalidCharactersForNameLabel = 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ '<>={}' %}

        {{ ps.form_group_row(cmsPageCategoryForm.name, {}, {
          'label': 'Name'|trans({}, 'Admin.Global'),
          'help': invalidCharactersForCatalogLabel
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.is_displayed, {}, {
          'label': 'Displayed'|trans({}, 'Admin.Global'),
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.parent_category, {}, {
          'label': 'Parent category'|trans({}, 'Admin.Design.Feature'),
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.description, {}, {
          'label': 'Description'|trans({}, 'Admin.Global'),
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.meta_title, {}, {
          'label': 'Meta title'|trans({}, 'Admin.Global'),
          'help': invalidCharactersForNameLabel
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.meta_description, {}, {
          'label': 'Meta description'|trans({}, 'Admin.Global'),
          'help': invalidCharactersForNameLabel
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.meta_keywords, {}, {
          'label': 'Meta keywords'|trans({}, 'Admin.Global'),
          'help': invalidCharactersForNameLabel
        }) }}

        {{ ps.form_group_row(cmsPageCategoryForm.friendly_url, {}, {
          'label': 'Friendly URL'|trans({}, 'Admin.Global'),
          'help': 'Only letters and the minus (-) character are allowed.'|trans({}, 'Admin.Catalog.Help')
        }) }}

        {% if cmsPageCategoryForm.shop_association is defined %}
          {{ ps.form_group_row(cmsPageCategoryForm.shop_association, {}, {
            'label': 'Shop association'|trans({}, 'Admin.Global')
          }) }}
        {% endif %}

      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"{{ path('admin_cms_pages_index', {'id_cms_category' : cmsCategoryParentId}) }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>

  </div>

  {{ form_rest(cmsPageCategoryForm) }}
  {{ form_end(cmsPageCategoryForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/category_form.html.twig");
    }
}
