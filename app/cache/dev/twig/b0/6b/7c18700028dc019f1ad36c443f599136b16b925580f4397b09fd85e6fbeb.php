<?php

/* ROGERPlastProdBundle:Client:communique.html.twig */
class __TwigTemplate_b06b7c18700028dc019f1ad36c443f599136b16b925580f4397b09fd85e6fbeb extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "<title>Infos - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<div class = \"contact\">
<p>VOUS VOULEZ NOUS CONTACTEZ POUR QUOI HEIN ? DITES LE NOUS MAINTENANT NON MAIS BANDE DE TARD</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Client:communique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
