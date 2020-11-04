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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig */
class __TwigTemplate_805e42114494238b957d5e95ebd7085b54d75a8fc5d61cd7167d65633bc8fa09 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generateMailsFormBlock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generateMailsFormBlock"));

        // line 27
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">email</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List %theme% layouts", ["%theme%" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", [])], "Admin.Design.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-block\">

            <table class=\"grid-table table\">
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th scope=\"col\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th scope=\"col\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module", [], "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th scope=\"col\">
                    <div class=\"grid-actions-header-text\">
                      ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "layouts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mailLayout"]) {
            // line 54
            echo "                  <tr>
                    <td class=\"data-type\">
                      ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["mailLayout"], "name", []), "html", null, true);
            echo "
                    </td>
                    <td class=\"data-type\">
                      ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["mailLayout"], "moduleName", []), "html", null, true);
            echo "
                    </td>
                    <td class=\"action-type\">
                      ";
            // line 62
            if (twig_test_empty($this->getAttribute($context["mailLayout"], "moduleName", []))) {
                // line 63
                echo "                        ";
                $context["previewUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_preview_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 64
                echo "                        ";
                $context["rawUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 65
                echo "                        ";
                $context["txtUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "txt"]);
                // line 66
                echo "                        ";
                $context["mailUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_send_test_mail", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", [])]);
                // line 67
                echo "                      ";
            } else {
                // line 68
                echo "                        ";
                $context["previewUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_preview_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 69
                echo "                        ";
                $context["rawUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 70
                echo "                        ";
                $context["txtUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "txt"]);
                // line 71
                echo "                        ";
                $context["mailUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_send_test_module_mail", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? $this->getContext($context, "mailTheme")), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", [])]);
                // line 72
                echo "                      ";
            }
            // line 73
            echo "
                      <div class=\"btn-group-action text-right\">
                        <div class=\"btn-group\">
                          <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["previewUrl"] ?? $this->getContext($context, "previewUrl")), "html", null, true);
            echo "\">
                            <i class=\"material-icons\">http</i>
                          </a>

                          <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                             data-toggle=\"dropdown\"
                             aria-haspopup=\"true\"
                             aria-expanded=\"false\"
                          >
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\">
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["rawUrl"] ?? $this->getContext($context, "rawUrl")), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">code</i>
                              ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Raw HTML", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                            </a>
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["txtUrl"] ?? $this->getContext($context, "txtUrl")), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">subject</i>
                              ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Text", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                            </a>
                            <a class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["mailUrl"] ?? $this->getContext($context, "mailUrl")), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">email</i>
                              ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "              </tbody>
            </table>

        </div>

        <div class=\"card-footer\">
          <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_index", (((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? $this->getContext($context, "params")), [])) : ([]))), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
            <i class=\"material-icons\">arrow_back</i>
            ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to configuration", [], "Admin.Actions"), "html", null, true);
        echo "
          </a>
        </div>

      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 114,  217 => 112,  209 => 106,  195 => 98,  190 => 96,  185 => 94,  180 => 92,  175 => 90,  170 => 88,  155 => 76,  150 => 73,  147 => 72,  144 => 71,  141 => 70,  138 => 69,  135 => 68,  132 => 67,  129 => 66,  126 => 65,  123 => 64,  120 => 63,  118 => 62,  112 => 59,  106 => 56,  102 => 54,  98 => 53,  89 => 47,  82 => 43,  76 => 40,  64 => 31,  58 => 27,  40 => 26,  37 => 25,);
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

{% block generateMailsFormBlock %}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">email</i> {{ 'List %theme% layouts'|trans({'%theme%': mailTheme.name}, 'Admin.Design.Feature') }}
        </h3>

        <div class=\"card-block\">

            <table class=\"grid-table table\">
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th scope=\"col\">
                    {{ 'Name'|trans({}, 'Admin.Global') }}
                  </th>
                  <th scope=\"col\">
                    {{ 'Module'|trans({}, 'Admin.Global') }}
                  </th>
                  <th scope=\"col\">
                    <div class=\"grid-actions-header-text\">
                      {{ 'Actions'|trans({}, 'Admin.Global') }}
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                {% for mailLayout in mailTheme.layouts %}
                  <tr>
                    <td class=\"data-type\">
                      {{ mailLayout.name }}
                    </td>
                    <td class=\"data-type\">
                      {{ mailLayout.moduleName }}
                    </td>
                    <td class=\"action-type\">
                      {% if mailLayout.moduleName is empty %}
                        {% set previewUrl = path('admin_mail_theme_preview_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'html'}) %}
                        {% set rawUrl = path('admin_mail_theme_raw_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'html'}) %}
                        {% set txtUrl = path('admin_mail_theme_raw_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'txt'}) %}
                        {% set mailUrl = path('admin_mail_theme_send_test_mail', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name}) %}
                      {% else %}
                        {% set previewUrl = path('admin_mail_theme_preview_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'html'}) %}
                        {% set rawUrl = path('admin_mail_theme_raw_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'html'}) %}
                        {% set txtUrl = path('admin_mail_theme_raw_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'txt'}) %}
                        {% set mailUrl = path('admin_mail_theme_send_test_module_mail', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name}) %}
                      {% endif %}

                      <div class=\"btn-group-action text-right\">
                        <div class=\"btn-group\">
                          <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"{{ previewUrl }}\">
                            <i class=\"material-icons\">http</i>
                          </a>

                          <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                             data-toggle=\"dropdown\"
                             aria-haspopup=\"true\"
                             aria-expanded=\"false\"
                          >
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\">
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"{{ rawUrl }}\">
                              <i class=\"material-icons\">code</i>
                              {{ 'Raw HTML'|trans({}, 'Admin.Design.Feature') }}
                            </a>
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"{{ txtUrl }}\">
                              <i class=\"material-icons\">subject</i>
                              {{ 'Text'|trans({}, 'Admin.Design.Feature') }}
                            </a>
                            <a class=\"btn tooltip-link dropdown-item\" href=\"{{ mailUrl }}\">
                              <i class=\"material-icons\">email</i>
                              {{ 'Send a test email'|trans({}, 'Admin.Advparameters.Feature') }}
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>

        </div>

        <div class=\"card-footer\">
          <a href=\"{{ path('admin_mail_theme_index', params|default({})) }}\" class=\"btn btn-outline-secondary\">
            <i class=\"material-icons\">arrow_back</i>
            {{ 'Back to configuration'|trans({}, 'Admin.Actions') }}
          </a>
        </div>

      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig");
    }
}
