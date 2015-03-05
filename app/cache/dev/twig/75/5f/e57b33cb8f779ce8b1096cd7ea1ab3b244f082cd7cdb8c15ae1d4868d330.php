<?php

/* ROGERPlastProdBundle:Config:acces.html.twig */
class __TwigTemplate_755fe57b33cb8f779ce8b1096cd7ea1ab3b244f082cd7cdb8c15ae1d4868d330 extends Twig_Template
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
        echo "<title>Panneau de configuration - Gestion des accès - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<a class = \"liens\" href=\"#\"><button class=\"cust_butt\"><p>Ajouter un accès à un/des utilisateur(s)</p></button></a>
<a class = \"liens\" href=\"#\"><button class=\"cust_butt\"><p>Supprimer l'accès à un/des utilisateur(s)</p></button></a>
<a class = \"liens\" href=\"#\"><button class=\"cust_butt\"><p>Modifier l'accès d'un/de plusieurs utilisateur(s)</p></button></a>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Config:acces.html.twig";
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
