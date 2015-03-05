<?php

/* ROGERPlastProdBundle:Config:index.html.twig */
class __TwigTemplate_130bbe28f6aa0d3315fcb01e0067a2c0bf02f7c996db6c9d513b691dbeba51ec extends Twig_Template
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
        echo "<title>Panneau de configuration - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<a class=\"liens\" href = \"";
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_config_droits");
        echo "\"><button class =\"cust_butt_config\"><p>Gérer les droits.</p></button></a>
<a class=\"liens\" href = \"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_config_acces");
        echo "\"><button class =\"cust_butt_config\"><p>Gérer les accès.</p></button></a>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
