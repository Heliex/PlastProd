<?php

/* ROGERPlastProdBundle:Production:etiquette.html.twig */
class __TwigTemplate_3ebf0e907113f6c37f7d9ab6f3cd32fc84624fa682ffe269f18239f449b7c924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("ROGERPlastProdBundle:PlastProd:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ROGERPlastProdBundle:PlastProd:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "<title>Production - Etiquettes - PlastProd </title>
";
    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        // line 9
        echo "<div class =\"lancement\">
<p> On affichera ici la page des étiquettes</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Production:etiquette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  40 => 5,  37 => 4,  11 => 3,);
    }
}
