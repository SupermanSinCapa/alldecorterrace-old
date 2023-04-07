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

/* themes/custom/inusti_subtheme/templates/fields/field--node--field-portfolio-images.html.twig */
class __TwigTemplate_4eea17c8c2b59064e5b2b224939b585ecabd73b31f3a769fc1432a44c37f297b extends \Twig\Template
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
        // line 23
        echo "
<div";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 24, $this->source), "html", null, true);
        echo ">
   ";
        // line 25
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) < 2)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "<div class=\"item\"> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 29
            echo "  
   <div class=\"owl-carousel init-carousel-owl portfolio-images gallery-popup\" data-items=\"1\" data-items_lg=\"1\" data-items_md=\"1\" data-items_sm=\"1\" data-items_xs=\"1\" data-loop=\"1\"  data-pagination=\"1\" data-navigation=\"1\" data-touch_drag=\"1\" data-mouse_drag=\"1\">";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "<div class=\"item\"> 
          <a style=\"position:absolute;width:100%;height:100%;z-index:11;left:0;top:0;\" href=\"";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 33), "uri", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
                echo "\" class=\"image-popup\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\"></a>
          ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</div>
";
        }
        // line 39
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/inusti_subtheme/templates/fields/field--node--field-portfolio-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  85 => 37,  77 => 34,  71 => 33,  68 => 32,  64 => 31,  61 => 29,  52 => 27,  48 => 26,  46 => 25,  42 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a single field in a view.
 *
 * Available variables:
 * - view: The view that the field belongs to.
 * - field: The field handler that can process the input.
 * - row: The raw result of the database query that generated this field.
 * - output: The processed output that will normally be used.
 *
 * When fetching output from the row this construct should be used:
 * data = row[field.field_alias]
 *
 * The above will guarantee that you'll always get the correct data, regardless
 * of any changes in the aliasing that might happen if the view is modified.
 *
 * @see template_preprocess_views_view_field()
 *
 * @ingroup themeable
 */
#}

<div{{ attributes }}>
   {% if items|length < 2 %}
      {%- for item in items -%}
         <div class=\"item\"> {{ item.content }}</div>
      {%- endfor -%}
   {% else %}  
   <div class=\"owl-carousel init-carousel-owl portfolio-images gallery-popup\" data-items=\"1\" data-items_lg=\"1\" data-items_md=\"1\" data-items_sm=\"1\" data-items_xs=\"1\" data-loop=\"1\"  data-pagination=\"1\" data-navigation=\"1\" data-touch_drag=\"1\" data-mouse_drag=\"1\">
     {%- for item in items -%}
         <div class=\"item\"> 
          <a style=\"position:absolute;width:100%;height:100%;z-index:11;left:0;top:0;\" href=\"{{file_url(item.content['#item'].entity.uri.value)}}\" class=\"image-popup\" title=\"{{ item.content['#item'].title }}\"></a>
          {{ item.content }}
        </div>
     {%- endfor -%}
   </div>
{% endif %}
</div>

", "themes/custom/inusti_subtheme/templates/fields/field--node--field-portfolio-images.html.twig", "/var/www/html/web/themes/custom/inusti_subtheme/templates/fields/field--node--field-portfolio-images.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25, "for" => 26);
        static $filters = array("escape" => 24, "length" => 25);
        static $functions = array("file_url" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['file_url']
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
