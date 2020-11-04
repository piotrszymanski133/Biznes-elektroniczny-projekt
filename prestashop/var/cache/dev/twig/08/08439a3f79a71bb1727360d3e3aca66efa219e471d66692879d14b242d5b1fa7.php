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

/* @MailThemes/classic/components/layout.html.twig */
class __TwigTemplate_5592921aab8670f62d6f0f3f131deb9f2f84f82236906e26c989d04495bd6a71 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/components/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/components/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message from {shop_name}", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? $this->getContext($context, "mailThemesUrl")), "html", null, true);
        echo "/classic/assets/email.css\">
    ";
        // line 8
        if (($context["languageIsRTL"] ?? $this->getContext($context, "languageIsRTL"))) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? $this->getContext($context, "mailThemesUrl")), "html", null, true);
            echo "/classic/assets/rtl.css\">";
        }
        // line 9
        echo "
    <style>
      /****** responsive ********/
      @media only screen and (max-width: 300px){
        body {
          width:218px !important;
          margin:auto !important;
        }
        .table {width:195px !important;margin:auto !important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}
        span.title{font-size:20px !important;line-height: 23px !important}
        span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}
        td.box p{font-size: 12px !important;font-weight: bold !important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 200px!important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }

      @media only screen and (min-width: 301px) and (max-width: 500px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        .table {width:450px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" ";
        // line 64
        if ((((isset($context["languageIsRTL"]) || array_key_exists("languageIsRTL", $context))) ? (_twig_default_filter(($context["languageIsRTL"] ?? $this->getContext($context, "languageIsRTL")), false)) : (false))) {
            echo "dir=\"rtl\"";
        }
        echo ">
    <table class=\"table table-mail\">
      <tr>
        <td id=\"header-left\" class=\"space\">&nbsp;</td>
        <td align=\"center\">
          <table class=\"table\" bgcolor=\"#ffffff\">
            ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "          </table>
        </td>
        <td id=\"footer-right\" class=\"space\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/header.html.twig", "@MailThemes/classic/components/layout.html.twig", 71)->display($context);
        // line 72
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/footer.html.twig", "@MailThemes/classic/components/layout.html.twig", 78)->display($context);
        // line 79
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 79,  207 => 78,  198 => 77,  188 => 75,  179 => 74,  169 => 72,  166 => 71,  157 => 70,  140 => 80,  138 => 77,  135 => 76,  133 => 74,  130 => 73,  128 => 70,  117 => 64,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>{{ 'Message from {shop_name}'|trans({}, 'Emails.Body', locale) }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mailThemesUrl }}/classic/assets/email.css\">
    {% if languageIsRTL %}<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mailThemesUrl }}/classic/assets/rtl.css\">{% endif %}

    <style>
      /****** responsive ********/
      @media only screen and (max-width: 300px){
        body {
          width:218px !important;
          margin:auto !important;
        }
        .table {width:195px !important;margin:auto !important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}
        span.title{font-size:20px !important;line-height: 23px !important}
        span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}
        td.box p{font-size: 12px !important;font-weight: bold !important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 200px!important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }

      @media only screen and (min-width: 301px) and (max-width: 500px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        .table {width:450px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" {% if languageIsRTL|default(false) %}dir=\"rtl\"{% endif %}>
    <table class=\"table table-mail\">
      <tr>
        <td id=\"header-left\" class=\"space\">&nbsp;</td>
        <td align=\"center\">
          <table class=\"table\" bgcolor=\"#ffffff\">
            {% block header %}
              {% include '@MailThemes/classic/components/header.html.twig' %}
            {% endblock header %}

            {% block content %}
            {% endblock %}

            {% block footer %}
              {% include '@MailThemes/classic/components/footer.html.twig' %}
            {% endblock footer %}
          </table>
        </td>
        <td id=\"footer-right\" class=\"space\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
", "@MailThemes/classic/components/layout.html.twig", "/var/www/html/prestashop/mails/themes/classic/components/layout.html.twig");
    }
}
