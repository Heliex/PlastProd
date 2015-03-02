<?php

/* ROGERPlastProdBundle:Client:client.html.twig */
class __TwigTemplate_715f259007306f387bc9940f668addbb97df698e35dedbfbdb8b018ee3707544 extends Twig_Template
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
        echo "<title>Client - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<div>
\t<p><a class = \"liens\" href = \"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_client_infos");
        echo "\">Visualiser les infos de l'entreprise.</a></p>
\t<p><a class = \"liens\" href = \"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_client_communique");
        echo "\">Communiquer avec l'entreprise.</a></p>
\t<p><a class = \"liens\" href = \"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_client_suivi");
        echo "\">Suivre votre commande.</a></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
