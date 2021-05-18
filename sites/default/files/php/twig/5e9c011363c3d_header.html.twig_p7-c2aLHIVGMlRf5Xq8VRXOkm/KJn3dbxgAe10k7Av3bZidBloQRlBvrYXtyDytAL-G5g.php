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

/* themes/contrib/mgroofing_theme/templates/_includes/global/header.html.twig */
class __TwigTemplate_13d4704e43641bb6943c34e06849e6242642837fcc2c9bdea1d2014382d634c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
  <nav class=\"navbar-dark bg-dark\">
    <div id=\"showMenu\">
      <div class=\"menu px-4\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <a class=\"navbar-brand px-2\" href=\"#\"><img src=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "\" alt=\"Site Logo\" /></a>
    ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
        echo "
    <div class=\"menu-wrap\">
      <div class=\"icon-list\">
      ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      <div>
\t  </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mgroofing_theme/templates/_includes/global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  70 => 11,  66 => 10,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
  <nav class=\"navbar-dark bg-dark\">
    <div id=\"showMenu\">
      <div class=\"menu px-4\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <a class=\"navbar-brand px-2\" href=\"#\"><img src=\"{{ logo }}\" alt=\"Site Logo\" /></a>
    {{ page.cart }}
    <div class=\"menu-wrap\">
      <div class=\"icon-list\">
      {{ page.primary_menu }}
      <div>
\t  </div>
  </nav>
</header>", "themes/contrib/mgroofing_theme/templates/_includes/global/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mgroofingandconstruction.com/themes/contrib/mgroofing_theme/templates/_includes/global/header.html.twig");
    }
}
