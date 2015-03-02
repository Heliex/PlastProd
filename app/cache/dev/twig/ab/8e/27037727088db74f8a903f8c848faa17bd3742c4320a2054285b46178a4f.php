<?php

/* ROGERPlastProdBundle:Production:bonAJeter.html.twig */
class __TwigTemplate_ab8e27037727088db74f8a903f8c848faa17bd3742c4320a2054285b46178a4f extends Twig_Template
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
        echo "<title>Production - Produits déféctueux -  PlastProd </title>
";
    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        // line 9
        echo "<div>
\t<p>Ici on affichera tout ce qui est Bon à jeter.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Production:bonAJeter.html.twig";
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
