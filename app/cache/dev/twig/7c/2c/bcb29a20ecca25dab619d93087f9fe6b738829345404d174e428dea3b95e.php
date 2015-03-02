<?php

/* ROGERPlastProdBundle:PlastProd:index.html.twig */
class __TwigTemplate_7c2cbcb29a20ecca25dab619d93087f9fe6b738829345404d174e428dea3b95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "<title>Accueil  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "</title>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class = \"container_principale\">
\t<div class = \"chemin\">
\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "pathInfo", array()), "html", null, true);
        echo "</p>
\t</div>
\t
\t<div class = \"module\">
\t<p> Nom du module : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "html", null, true);
        echo "<p>
\t</div>
\t
\t<div class = \"action\">
\t";
        // line 20
        $this->displayBlock('actions', $context, $blocks);
        // line 23
        echo "\t</div>
</div>
";
    }

    // line 20
    public function block_actions($context, array $blocks = array())
    {
        // line 21
        echo "\t<p>La société PlastProd est une société qui crée des Pièces à partir de Matières Premières depuis 1806, Cette entreprise est un gage de qualité et représente notre formation au sein de CESI NANCY.</p>
\t";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:PlastProd:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  77 => 20,  71 => 23,  69 => 20,  62 => 16,  55 => 12,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}
