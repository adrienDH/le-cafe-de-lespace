<?php

/* pages/home.twig */
class __TwigTemplate_08898f359b0edb0d089a4e12a0176dbc6f62804c6cc2912737ab6c4760e3b7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Coucou c'est moi";
    }

    public function getTemplateName()
    {
        return "pages/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/home.twig", "D:\\wamp\\www\\slim-framework\\app\\views\\pages\\home.twig");
    }
}
