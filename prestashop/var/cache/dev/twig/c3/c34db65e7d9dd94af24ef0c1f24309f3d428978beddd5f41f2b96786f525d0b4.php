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

/* /var/www/html/prestashop/mails/themes/classic/core/account.html.twig */
class __TwigTemplate_6f0021ff1b56fa656ed21f908011a383b809bc08d88a18a0fb08d9940fa462e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@MailThemes/classic/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</span><br/>
      <span class=\"subtitle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thank you for creating a customer account at {shop_name}.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 22
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 23
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your login email address on {shop_name}", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>
            
";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is your login email address:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "<br/>
              <span><strong>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("E-mail address:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " <a href=\"mailto:{email}\">{email}</a></strong></span>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <p style=\"border-bottom:1px solid #D6D4D4;\">";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Important Security Tips:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</p>
            <ol>
              <li>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always keep your account details safe.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</li>
              <li>";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Never disclose your login details to anyone.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</li>
              <li>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change your password regularly.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</li>
              <li>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should you suspect someone is using your account illegally, please notify us immediately.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</li>
            </ol>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can now place orders on our shop:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " <a href=\"{shop_url}\">{shop_name}</a></span>
    </font>
  </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 70,  171 => 69,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  137 => 50,  133 => 49,  112 => 31,  108 => 30,  105 => 29,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  72 => 8,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span><br/>
      <span class=\"subtitle\">{{ 'Thank you for creating a customer account at {shop_name}.'|trans({}, 'Emails.Body', locale) }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Your login email address on {shop_name}'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
              {{ 'Here is your login email address:'|trans({}, 'Emails.Body', locale)|raw }}<br/>
              <span><strong>{{ 'E-mail address:'|trans({}, 'Emails.Body', locale)|raw }} <a href=\"mailto:{email}\">{email}</a></strong></span>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            <p style=\"border-bottom:1px solid #D6D4D4;\">{{ 'Important Security Tips:'|trans({}, 'Emails.Body', locale)|raw }}</p>
            <ol>
              <li>{{ 'Always keep your account details safe.'|trans({}, 'Emails.Body', locale)|raw }}</li>
              <li>{{ 'Never disclose your login details to anyone.'|trans({}, 'Emails.Body', locale)|raw }}</li>
              <li>{{ 'Change your password regularly.'|trans({}, 'Emails.Body', locale)|raw }}</li>
              <li>{{ 'Should you suspect someone is using your account illegally, please notify us immediately.'|trans({}, 'Emails.Body', locale)|raw }}</li>
            </ol>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>{{ 'You can now place orders on our shop:'|trans({}, 'Emails.Body', locale)|raw }} <a href=\"{shop_url}\">{shop_name}</a></span>
    </font>
  </td>
</tr>
{% endblock %}
", "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig", "/var/www/html/prestashop/mails/themes/classic/core/account.html.twig");
    }
}
