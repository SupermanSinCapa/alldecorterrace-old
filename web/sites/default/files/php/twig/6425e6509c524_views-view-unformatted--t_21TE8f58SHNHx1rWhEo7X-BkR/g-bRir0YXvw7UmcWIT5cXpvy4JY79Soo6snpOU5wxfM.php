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

/* themes/custom/inusti_subtheme/templates/views/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_1e781c82491d74075e1f5786ff749e64660181a7b2ee6c97efbf985799df2828 extends \Twig\Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "
";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "
    ";
            // line 28
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 29
            echo "
    ";
            // line 30
            if (((($context["i"] ?? null) % 4) == 1)) {
                // line 31
                echo "      <div class=\"row\">
    ";
            }
            // line 33
            echo "
      <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
        ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
      </div>

    ";
            // line 38
            if ((((($context["i"] ?? null) % 4) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                // line 39
                echo "      </div>
    ";
            }
            // line 41
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/inusti_subtheme/templates/views/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  89 => 41,  85 => 39,  83 => 38,  77 => 35,  73 => 33,  69 => 31,  67 => 30,  64 => 29,  62 => 28,  59 => 27,  55 => 26,  52 => 25,  50 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
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
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}

{% set i = 0 %}
<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  {% for row in rows %}

    {% set i = i + 1 %}

    {% if i % 4 == 1 %}
      <div class=\"row\">
    {% endif %}

      <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
        {{ row.content }}
      </div>

    {% if (i % 4 == 0 or i == rows|length)  %}
      </div>
    {% endif %}

  {% endfor %}
</div>
", "themes/custom/inusti_subtheme/templates/views/views-view-unformatted--taxonomy-term.html.twig", "/var/www/html/web/themes/custom/inusti_subtheme/templates/views/views-view-unformatted--taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24, "for" => 26);
        static $filters = array("escape" => 21, "length" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
