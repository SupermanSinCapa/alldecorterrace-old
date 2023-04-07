<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/media_library/templates/media--media-library.html.twig */
class __TwigTemplate_3c17b1397cfb4fed34539674e90f9a5f235d2184ed6df0b945a4927d9e6a2740 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source), "html", null, true);
        echo ">
  ";
        // line 38
        if (($context["content"] ?? null)) {
            // line 39
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["preview_attributes"] ?? null), "addClass", [0 => "js-media-library-item-preview"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">
      ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 40, $this->source), "name"), "html", null, true);
            echo "
    </div>
    ";
            // line 42
            if ( !($context["status"] ?? null)) {
                // line 43
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("unpublished"));
                echo "
    ";
            }
            // line 45
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata_attributes"] ?? null), 45, $this->source), "html", null, true);
            echo ">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 46, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 49
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/media_library/templates/media--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 49,  69 => 46,  64 => 45,  58 => 43,  56 => 42,  51 => 40,  46 => 39,  44 => 38,  39 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to present a media entity in the media library.
 *
 * Available variables:
 * - media: The entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - url: Direct URL of the media.
 * - preview_attributes: HTML attributes for the preview wrapper.
 * - metadata_attributes: HTML attributes for the expandable metadata area.
 * - status: Whether or not the Media is published.
 *
 * @see template_preprocess_media()
 * @see media_library_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content %}
    <div{{ preview_attributes.addClass('js-media-library-item-preview') }}>
      {{ content|without('name') }}
    </div>
    {% if not status %}
      {{ \"unpublished\" | t }}
    {% endif %}
    <div{{ metadata_attributes }}>
      {{ name }}
    </div>
  {% endif %}
</article>
", "core/modules/media_library/templates/media--media-library.html.twig", "/var/www/html/web/core/modules/media_library/templates/media--media-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 37, "without" => 40, "t" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
