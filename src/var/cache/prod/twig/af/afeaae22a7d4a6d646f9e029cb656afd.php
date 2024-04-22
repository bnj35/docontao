<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ContaoCore/Backend/be_route_path.html.twig */
class __TwigTemplate_9d71dee1acf5144c0562201425911b82 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"w50 widget\">
    <h3>";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routePath.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</h3>
    <p class=\"info\">";
        // line 4
        yield ($context["path"] ?? null);
        yield "</p>
    <p class=\"tl_help tl_tip\" title=\"\">";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routePath.1", [], "contao_tl_page"), "contao_html", null, true);
        yield "</p>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_route_path.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_route_path.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_route_path.html.twig");
    }
}