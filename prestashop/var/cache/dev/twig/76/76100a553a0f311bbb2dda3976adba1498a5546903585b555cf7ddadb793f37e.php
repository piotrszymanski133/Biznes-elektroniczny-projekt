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

/* /var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig */
class __TwigTemplate_ad1b5d1b64afbee46ca46a0bc197363d1a2c2d3692e6419a888a2fdadf5eff0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thank you for shopping with {shop_name}!", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Awaiting wire payment", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>
            
";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order with the reference [1]{order_name}[/1] has been placed successfully and will be [1]shipped as soon as we receive your payment[/1].", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
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
        // line 48
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <p style=\"border-bottom:1px solid #D6D4D4;\">
              ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have selected to pay by wire transfer.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
            </p>
            <span>
              ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here are the bank details for your transfer:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "<br/>
              <span><strong>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {total_paid}<br/>
              <span><strong>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account owner:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {bankwire_owner}<br/>
              <span><strong>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account details:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {bankwire_details}<br/>
              <span><strong>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bank address:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {bankwire_address}<br/>
                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please specify your order reference in the bankwire description.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
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
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can review your order and download your invoice from the <a href=\"{history_url}\">\"Order history\"</a> section of your customer account by clicking <a href=\"{my_account_url}\">\"My account\"</a> on our shop.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\">\"Guest Tracking\"</a> section on our shop.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
      </span>
    </font>
  </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 83,  194 => 81,  184 => 74,  179 => 72,  162 => 58,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  136 => 50,  131 => 48,  110 => 30,  107 => 29,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  72 => 8,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  22 => 1,);
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
      <span class=\"subtitle\">{{ 'Thank you for shopping with {shop_name}!'|trans({}, 'Emails.Body', locale) }}</span>
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
                {{ 'Order {order_name}'|trans({}, 'Emails.Body', locale) }}&nbsp;-&nbsp;{{ 'Awaiting wire payment'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
              {{ 'Your order with the reference [1]{order_name}[/1] has been placed successfully and will be [1]shipped as soon as we receive your payment[/1].'|trans({'[1]': '<span><strong>', '[/1]': '</strong></span>'}, 'Emails.Body', locale)|raw }}
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
            <p style=\"border-bottom:1px solid #D6D4D4;\">
              {{ 'You have selected to pay by wire transfer.'|trans({}, 'Emails.Body', locale)|raw }}
            </p>
            <span>
              {{ 'Here are the bank details for your transfer:'|trans({}, 'Emails.Body', locale)|raw }}<br/>
              <span><strong>{{ 'Amount:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {total_paid}<br/>
              <span><strong>{{ 'Account owner:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {bankwire_owner}<br/>
              <span><strong>{{ 'Account details:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {bankwire_details}<br/>
              <span><strong>{{ 'Bank address:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {bankwire_address}<br/>
                            {{ 'Please specify your order reference in the bankwire description.'|trans({}, 'Emails.Body', locale)|raw }}
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
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'You can review your order and download your invoice from the <a href=\"{history_url}\">\"Order history\"</a> section of your customer account by clicking <a href=\"{my_account_url}\">\"My account\"</a> on our shop.'|trans({}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\">\"Guest Tracking\"</a> section on our shop.'|trans({}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
{% endblock %}
", "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig", "/var/www/html/prestashop/mails/themes/classic/core/bankwire.html.twig");
    }
}
