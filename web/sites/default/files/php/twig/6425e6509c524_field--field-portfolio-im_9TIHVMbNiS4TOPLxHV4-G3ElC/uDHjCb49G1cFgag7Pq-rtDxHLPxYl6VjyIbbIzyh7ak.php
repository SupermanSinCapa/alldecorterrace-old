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

/* themes/custom/inusti_subtheme/templates/fields/field--field-portfolio-images--teaser-4.html.twig */
class __TwigTemplate_90ce2d9785b355b81242d62e622c2f344817e610d56acb342b698e5eb758704f extends \Twig\Template
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
        // line 1
        echo "<div class=\"gallery-popup\">
";
        // line 2
        $context["i"] = 0;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 5
            echo "    ";
            if ((($context["i"] ?? null) == 1)) {
                // line 6
                echo "      <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 6), "uri", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source)), "html", null, true);
                echo "\" class=\"image-popup\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\">
        <i class=\"fa fa-expand\"></i>
      </a>
      ";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 11
                echo "      <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 11)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#item"] ?? null) : null), "entity", [], "any", false, false, true, 11), "uri", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
                echo "\" class=\"image-popup d-none\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 11)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#item"] ?? null) : null), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"></a>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/inusti_subtheme/templates/fields/field--field-portfolio-images--teaser-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  67 => 11,  62 => 9,  53 => 6,  50 => 5,  48 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gallery-popup\">
{% set i = 0 %}
  {%- for item in items -%}
    {% set i = i + 1 %}
    {% if i == 1 %}
      <a href=\"{{file_url(item.content['#item'].entity.uri.value)}}\" class=\"image-popup\" title=\"{{ item.content['#item'].title }}\">
        <i class=\"fa fa-expand\"></i>
      </a>
      {{ item.content }}
    {% else %}
      <a href=\"{{file_url(item.content['#item'].entity.uri.value)}}\" class=\"image-popup d-none\" title=\"{{ item.content['#item'].title }}\"></a>
    {% endif %}
  {%- endfor -%}
</div>", "themes/custom/inusti_subtheme/templates/fields/field--field-portfolio-images--teaser-4.html.twig", "/var/www/html/web/themes/custom/inusti_subtheme/templates/fields/field--field-portfolio-images--teaser-4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 3, "if" => 5);
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
