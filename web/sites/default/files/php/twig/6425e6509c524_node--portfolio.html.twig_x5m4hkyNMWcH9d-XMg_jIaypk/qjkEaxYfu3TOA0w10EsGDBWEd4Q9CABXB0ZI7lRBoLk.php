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

/* themes/custom/inusti_subtheme/templates/node/node--portfolio.html.twig */
class __TwigTemplate_78a92be8689e461e033a3250e0775fd1d5160fcdc1630f933f5da0fe1d148761 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 6 => "clearfix"];
        // line 12
        echo "
<!-- Start Display article for teaser page -->

";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 16
            echo "
  <div class=\"portfolio-v1\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</a> </h2>          
        </div>    
      </div>
    </div>
  </div>
";
        } elseif ((        // line 29
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 30
            echo "  ";
            ob_start();
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
  <div class=\"portfolio-v2\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-height\"></div>
      <div class=\"content-inner\">
        <span class=\"node-index\">0";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gva_node_index"] ?? null), 36, $this->source), "html", null, true);
            echo "</span>
        <div class=\"portfolio-information\">
          <div class=\"category\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</div>
          <h2 class=\"title\"><a href=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 39, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
            echo "</a> </h2>
          <div class=\"portfolio-hover\">
            <div class=\"desc\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</div>
            <div class=\"action\"><a class=\"btn-theme\" href=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 42, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            echo "</a></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

";
        } elseif ((        // line 49
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 50
            echo "    ";
            ob_start();
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "    <div class=\"portfolio-v3 portfolio-item\">      
      <div class=\"images\">
        ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
        <div class=\"read-more\"><a class=\"link\" href=\"";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 54, $this->source), "html", null, true);
            echo "\"><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            echo "</span></a></div>
      </div>
      <div class=\"portfolio-content\">
        <div class=\"content-inner\">
          <div class=\"category\">";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</div>
          <div class=\"portfolio-content-inner\">
            <h3 class=\"title\"><a href=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 60, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 60, $this->source), "html", null, true);
            echo "</a></h3>    
            <div class=\"desc\">";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 61, $this->source)), "html", null, true);
            echo "</div>
          </div>    
        </div>
      </div>
    </div>

";
        } elseif ((        // line 67
($context["view_mode"] ?? null) == "teaser_4")) {
            // line 68
            echo "    <div class=\"portfolio-v4\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        <a class=\"link\" href=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 72, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 76, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            echo "</a> </h2>
          <div class=\"category\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</div>
        </div>    
      </div>
    </div>
  </div>
";
        } else {
            // line 83
            echo "
<!-- Start Display article for detail page -->
";
            // line 85
            $context["xcol_1"] = "col-md-12 col-sm-12 col-xs-12";
            // line 86
            if (($context["informations"] ?? null)) {
                // line 87
                echo "  ";
                $context["xcol_1"] = "col-md-7 col-sm-12 col-xs-12";
                // line 88
                echo "  ";
                $context["xcol_2"] = "col-md-5 col-sm-12 col-xs-12";
            }
            // line 89
            echo " 

<article";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 91), "addClass", [0 => "node-detail"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
  <div class=\"portfolio-single\">
    
    <div class=\"row\">
      <div class=\"";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol_1"] ?? null), 95, $this->source), "html", null, true);
            echo "\"> 
        <div class=\"post-thumbnail\">
          ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 97)) {
                // line 98
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_images", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo " 
          ";
            }
            // line 100
            echo "        </div>
      </div>
      ";
            // line 102
            if (($context["informations"] ?? null)) {
                // line 103
                echo "      <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["xcol_2"] ?? null), 103, $this->source), "html", null, true);
                echo "\">
        <div class=\"portfolio-informations\">
          ";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["informations"] ?? null), 105, $this->source));
                echo "
        </div>
      </div>  
      ";
            }
            // line 109
            echo "    </div> 
     
    <div class=\"post-content\">
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_tags", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</span><span class=\"line\"></span><span class=\"post-created\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 113, $this->source), "html", null, true);
            echo " </span>
      </div>
      ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 115, $this->source), "html", null, true);
            echo "
         <h1";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 116), 116, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 116, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 117, $this->source), "html", null, true);
            echo " 
      <div";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 118), 118, $this->source), "html", null, true);
            echo ">
        ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 119, $this->source), "field_portfolio_images", "field_portfolio_tags", "field_portfolio_information", "comment"), "html", null, true);
            echo "
      </div>

      ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 122)) {
                // line 123
                echo "        <div id=\"node-single-comment\">
          ";
                // line 124
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 127
            echo "
    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/inusti_subtheme/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 127,  299 => 124,  296 => 123,  294 => 122,  288 => 119,  284 => 118,  280 => 117,  274 => 116,  270 => 115,  263 => 113,  257 => 109,  250 => 105,  244 => 103,  242 => 102,  238 => 100,  232 => 98,  230 => 97,  225 => 95,  218 => 91,  214 => 89,  210 => 88,  207 => 87,  205 => 86,  203 => 85,  199 => 83,  190 => 77,  184 => 76,  177 => 72,  173 => 71,  168 => 68,  166 => 67,  157 => 61,  151 => 60,  146 => 58,  137 => 54,  133 => 53,  129 => 51,  124 => 50,  122 => 49,  110 => 42,  106 => 41,  99 => 39,  95 => 38,  90 => 36,  83 => 31,  78 => 30,  76 => 29,  66 => 24,  59 => 20,  53 => 16,  51 => 15,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}

<!-- Start Display article for teaser page -->

{% if view_mode == 'teaser' %}

  <div class=\"portfolio-v1\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        {{ content.field_portfolio_images }}
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h2>          
        </div>    
      </div>
    </div>
  </div>
{% elseif view_mode == 'teaser_2' %}
  {% set body %}{{content.body}}{% endset %}

  <div class=\"portfolio-v2\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-height\"></div>
      <div class=\"content-inner\">
        <span class=\"node-index\">0{{ gva_node_index }}</span>
        <div class=\"portfolio-information\">
          <div class=\"category\">{{content.field_portfolio_tags}}</div>
          <h2 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h2>
          <div class=\"portfolio-hover\">
            <div class=\"desc\">{{ content.body }}</div>
            <div class=\"action\"><a class=\"btn-theme\" href=\"{{ url }}\">{{'Read More'|t}}</a></div>
          </div>
        </div>    
      </div>
    </div>
  </div>

{% elseif view_mode == 'teaser_3' %}
    {% set body %}{{content.body}}{% endset %}
    <div class=\"portfolio-v3 portfolio-item\">      
      <div class=\"images\">
        {{ content.field_portfolio_images }}
        <div class=\"read-more\"><a class=\"link\" href=\"{{ url }}\"><span>{{ 'Read More'|t }}</span></a></div>
      </div>
      <div class=\"portfolio-content\">
        <div class=\"content-inner\">
          <div class=\"category\">{{ content.field_portfolio_tags }}</div>
          <div class=\"portfolio-content-inner\">
            <h3 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h3>    
            <div class=\"desc\">{{ body|striptags }}</div>
          </div>    
        </div>
      </div>
    </div>

{% elseif view_mode == 'teaser_4' %}
    <div class=\"portfolio-v4\">      
    <div class=\"portfolio-content\">
      <div class=\"portfolio-images\">
        {{ content.field_portfolio_images }}
        <a class=\"link\" href=\"{{ url }}\"><i class=\"fa fa-link\"></i></a>
      </div>
      <div class=\"content-inner\">
        <div class=\"portfolio-information\">
          <h2 class=\"title\"> <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h2>
          <div class=\"category\">{{content.field_portfolio_tags}}</div>
        </div>    
      </div>
    </div>
  </div>
{% else %}

<!-- Start Display article for detail page -->
{% set xcol_1 = \"col-md-12 col-sm-12 col-xs-12\"  %}
{% if informations %}
  {% set xcol_1 = \"col-md-7 col-sm-12 col-xs-12\"  %}
  {% set xcol_2 = \"col-md-5 col-sm-12 col-xs-12\"  %}
{% endif %} 

<article{{ attributes.addClass(classes).addClass('node-detail') }}>
  <div class=\"portfolio-single\">
    
    <div class=\"row\">
      <div class=\"{{xcol_1}}\"> 
        <div class=\"post-thumbnail\">
          {% if content.field_portfolio_images %}
            {{ content.field_portfolio_images }} 
          {% endif %}
        </div>
      </div>
      {% if informations %}
      <div class=\"{{xcol_2}}\">
        <div class=\"portfolio-informations\">
          {{ informations|raw }}
        </div>
      </div>  
      {% endif %}
    </div> 
     
    <div class=\"post-content\">
      <div class=\"post-meta\">
        <span class=\"post-categories\">{{ content.field_portfolio_tags }}</span><span class=\"line\"></span><span class=\"post-created\"> {{date }} </span>
      </div>
      {{ title_prefix }}
         <h1{{ title_attributes.addClass('post-title') }}>{{ label }}</h1>
      {{ title_suffix }} 
      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        {{ content|without('field_portfolio_images','field_portfolio_tags', 'field_portfolio_information', 'comment') }}
      </div>

      {% if content.comment %}
        <div id=\"node-single-comment\">
          {{ content.comment }}
        </div>
      {% endif %}

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
{% endif %}", "themes/custom/inusti_subtheme/templates/node/node--portfolio.html.twig", "/var/www/html/web/themes/custom/inusti_subtheme/templates/node/node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15);
        static $filters = array("clean_class" => 4, "escape" => 20, "t" => 42, "striptags" => 61, "raw" => 105, "without" => 119);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't', 'striptags', 'raw', 'without'],
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
