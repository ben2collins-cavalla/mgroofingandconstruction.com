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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig */
class __TwigTemplate_bed5558e977b092aefb123b5510fe0021b5d7950d6c216ed1f92aaa337bf16b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "for" => 27];
        $filters = ["escape" => 1, "length" => 27];
        $functions = ["range" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['range']
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
        echo "<section class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "class", [])), "html", null, true);
        echo "\"  data-animate-cta=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_animation", []), 0, [], "array")), "html", null, true);
        echo "\">
  ";
        // line 2
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_video", []), 0, [], "array"))) {
            // line 3
            echo "    <section class=\"video\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "video_id", [])), "html", null, true);
            echo " >
      ";
            // line 4
            if (($this->getAttribute(($context["attributes"] ?? null), "video_id", []) != null)) {
                // line 5
                echo "      <section id=\"player\"></section>
      ";
            }
            // line 7
            echo "      ";
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_video", []), 0, [], "array"))) {
                // line 8
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_call_to_action_video", [])), "html", null, true);
                echo "
       ";
            }
            // line 10
            echo "    </section>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_image", []), 0, [], "array"))) {
            // line 14
            echo "    <img  class=\"background_image\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_image", []), 0, [], "array")), "html", null, true);
            echo "\" />
  ";
        }
        // line 16
        echo "
  <section class=\"center_content container px-3\">
    ";
        // line 18
        if ((($context["cta_logo"] ?? null) == 1)) {
            // line 19
            echo "    <img class=\"logo\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\" />
    ";
        }
        // line 21
        echo "    <h1 class=\"title-header\" >";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_header", []), 0, [], "array")), "html", null, true);
        echo "</h1>
    ";
        // line 22
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_subtext", []), 0, [], "array"))) {
            // line 23
            echo "      <p class=\"lead\" >";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_subtext", []), 0, [], "array")), "html", null, true);
            echo "</p>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), 0, [], "array"))) {
            // line 27
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "        ";
                if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"))) {
                    // line 29
                    echo "        <a class=\"btn btn-dark\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_call_to_action_hyperlink", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                    echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
        ";
                }
                // line 31
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 33,  151 => 32,  145 => 31,  137 => 29,  134 => 28,  129 => 27,  127 => 26,  124 => 25,  118 => 23,  116 => 22,  111 => 21,  105 => 19,  103 => 18,  99 => 16,  93 => 14,  91 => 13,  88 => 12,  84 => 10,  78 => 8,  75 => 7,  71 => 5,  69 => 4,  64 => 3,  62 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"{{ attributes.class }}\"  data-animate-cta=\"{{ content.field_call_to_action_animation[0] }}\">
  {%  if true in content.field_call_to_action_video[0] %}
    <section class=\"video\" {{ attributes.video_id }} >
      {%  if  attributes.video_id  != null %}
      <section id=\"player\"></section>
      {% endif %}
      {% if true in content.field_call_to_action_video[0] %}
      {{ content.field_call_to_action_video }}
       {% endif %}
    </section>
  {% endif %}

  {% if true in content.field_call_to_action_image[0] %}
    <img  class=\"background_image\" src=\"{{ content.field_call_to_action_image[0] }}\" />
  {% endif %}

  <section class=\"center_content container px-3\">
    {%  if cta_logo == 1 %}
    <img class=\"logo\" src=\"{{ logo }}\" width=\"100%\" height=\"100%\" />
    {% endif %}
    <h1 class=\"title-header\" >{{ content.field_call_to_action_header[0] }}</h1>
    {% if true in content.field_call_to_action_subtext[0] %}
      <p class=\"lead\" >{{ content.field_call_to_action_subtext[0] }}</p>
    {% endif %}

    {%  if true in content.field_call_to_action_hyperlink[0] %}
      {% for i in 0..content.field_call_to_action_hyperlink|length %}
        {% if content.field_call_to_action_hyperlink[i] is not null %}
        <a class=\"btn btn-dark\" href=\"{{ content.field_call_to_action_hyperlink[i]['#url'] }}\">{{ content.field_call_to_action_hyperlink[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
        {% endif %}
      {% endfor %}
    {% endif %}
  </section>
</section>", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mgroofingandconstruction.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_call_to_action/templates/paragraph--cavalla-call-to-action.html.twig");
    }
}
