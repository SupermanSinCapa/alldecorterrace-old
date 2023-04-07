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

/* modules/custom/gavias_pagebuilder/templates/frontend/builder.html.twig */
class __TwigTemplate_030195625b113b04c1561b56099e5ec949d9fcc9a9f93df85c7dba1770aad471 extends \Twig\Template
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
        echo "<div class=\"gavias-blockbuilder-content\">
  ";
        // line 2
        if ( !twig_test_empty(($context["edit_url"] ?? null))) {
            // line 3
            echo "   <a class=\"link-edit-blockbuider\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_url"] ?? null), 3, $this->source), "html", null, true);
            echo "\"> Config block builder </a>
  ";
        }
        // line 4
        echo " 
  ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 5, $this->source));
        echo "  
 </div> 
";
    }

    public function getTemplateName()
    {
        return "modules/custom/gavias_pagebuilder/templates/frontend/builder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  50 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gavias-blockbuilder-content\">
  {% if edit_url is not empty %}
   <a class=\"link-edit-blockbuider\" href=\"{{ edit_url }}\"> Config block builder </a>
  {% endif %} 
  {{ content|raw }}  
 </div> 
", "modules/custom/gavias_pagebuilder/templates/frontend/builder.html.twig", "/var/www/html/web/modules/custom/gavias_pagebuilder/templates/frontend/builder.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3, "raw" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
