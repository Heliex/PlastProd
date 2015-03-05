<?php

/* ROGERPlastProdBundle:Production:production.html.twig */
class __TwigTemplate_0efa40a07936d5b9f64edfd39e09c705282bc6dff30df5ee9a56528917901acf extends Twig_Template
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
        echo "<title>Production - PlastProd </title>
";
    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        // line 9
        echo "\t<a class = \"liens\" href = \"";
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_production_lancement");
        echo "\"><button class=\"cust_butt\"><p>Lancement de production ( BDC Obligatoire).</p></button></a>
\t<a class = \"liens\" href = \"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_production_etiquette");
        echo "\"><button class=\"cust_butt\"><p>Visualisation des étiquettes.</p></button></a>
\t<a class = \"liens\" href = \"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_production_jeter");
        echo "\"><button class=\"cust_butt\"><p>Visualisation des produits déféctueux.</p></button></a>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Production:production.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 10,  48 => 9,  45 => 8,  40 => 5,  37 => 4,  11 => 3,);
    }
}
