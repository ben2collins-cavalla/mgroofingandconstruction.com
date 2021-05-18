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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/viewfield-item--cavalla-photo-album-feed.html.twig */
class __TwigTemplate_966061f975402b4ae05278c11401344bf4d9affda23869cad7cd7203ab5da566 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 41];
        $filters = ["escape" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
        // line 41
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/viewfield-item--cavalla-photo-album-feed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 42,  56 => 41,);
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
 * Default theme implementation to display a viewfield item.
 *
  * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - viewfield-item--my-view--my-view-display.html.twig
 * - viewfield-item--my-view-display.html.twig
 * - viewfield-item--my-view.html.twig
 * - viewfield-item--field-foo--my-view--my-view-display.html.twig
 * - viewfield-item--field-foo--my-view-display.html.twig
 * - viewfield-item--field-foo--my-view.html.twig
 * - viewfield-item--field-foo--2.html.twig
 * - viewfield-item--field-foo.html.twig
 * - viewfield-item.html.twig
 *
 * Available variables:
 * - title: The title of this item if visible.
 * - content: The content of this item.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - delta: Ordinal specifying the item number in the field.
 * - entity: The entity object.
 * - view_mode: View mode; e.g., 'full', 'teaser', etc.
 *
 * @see template_preprocess_viewfield_item()
 *
 * @ingroup themeable
 */
#}
  {% block content %}
    {{ content }}
  {% endblock %}
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/viewfield-item--cavalla-photo-album-feed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mgroofingandconstruction.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_photo_album_feed/templates/viewfield-item--cavalla-photo-album-feed.html.twig");
    }
}
