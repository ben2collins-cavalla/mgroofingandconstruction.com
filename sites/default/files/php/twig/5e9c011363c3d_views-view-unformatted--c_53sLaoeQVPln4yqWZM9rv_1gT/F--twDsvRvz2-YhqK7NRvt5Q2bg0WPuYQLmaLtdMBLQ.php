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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/views-view-unformatted--cavalla-photo-album-feed.html.twig */
class __TwigTemplate_64e4da27d3afc7e63497a4c8dd17a0a165f8e27d3942b418536913262f7eba7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 19];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/views-view-unformatted--cavalla-photo-album-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  58 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

{% for row in rows %}
    {{- row.content -}}
{% endfor %}
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/views-view-unformatted--cavalla-photo-album-feed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mgroofingandconstruction.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/views-view-unformatted--cavalla-photo-album-feed.html.twig");
    }
}
