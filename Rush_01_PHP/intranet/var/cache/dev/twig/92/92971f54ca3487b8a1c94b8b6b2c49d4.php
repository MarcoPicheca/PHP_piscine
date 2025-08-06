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
use Twig\TemplateWrapper;

/* components/userinfo.html.twig */
class __TwigTemplate_c03cf9c9cccad09e670744197d0d2534 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/userinfo.html.twig"));

        // line 1
        yield "<div class=\"user_info\">

    <img src=\"";
        // line 3
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_profile.jpeg"), "html", null, true)));
        yield "\"
          alt=\"Profile Image\"
          style=\"max-width:150px;\">

    <div class=\"pick_and_name\">

        <h2 class=\"user_name\">
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "getFirstName", [], "method", false, false, false, 10), "html", null, true);
        yield "
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "getLastName", [], "method", false, false, false, 11), "html", null, true);
        yield "
        </h2>

        <div class=\"levelBar\">
            <p>Level ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "level", [], "any", false, false, false, 15), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "experience", [], "any", false, false, false, 15), "html", null, true);
        yield " XP / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["xpGoal"]) || array_key_exists("xpGoal", $context) ? $context["xpGoal"] : (function () { throw new RuntimeError('Variable "xpGoal" does not exist.', 15, $this->source); })()), "html", null, true);
        yield " XP</p>

            <div class=\"xp-bar\">
                <div class=\"xp-fill\" style=\"width: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["xpProgress"]) || array_key_exists("xpProgress", $context) ? $context["xpProgress"] : (function () { throw new RuntimeError('Variable "xpProgress" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "%;\"></div>
            </div>
        </div>
    
    </div>

    <div class=\"info\">
        <ul>
        <li>Email: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getEmail", [], "method", false, false, false, 26), "html", null, true);
        yield "</li>
        <li>Ev. P: ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "getEvalPoints", [], "method", false, false, false, 27), "html", null, true);
        yield "</li>
        </ul>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/userinfo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  95 => 27,  91 => 26,  80 => 18,  70 => 15,  63 => 11,  59 => 10,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"user_info\">

    <img src=\"{{ user.image is not empty ? user.image : asset('images/default_profile.jpeg') }}\"
          alt=\"Profile Image\"
          style=\"max-width:150px;\">

    <div class=\"pick_and_name\">

        <h2 class=\"user_name\">
            {{ user.getFirstName() }}
            {{ user.getLastName() }}
        </h2>

        <div class=\"levelBar\">
            <p>Level {{ user.level }} — {{ user.experience }} XP / {{ xpGoal }} XP</p>

            <div class=\"xp-bar\">
                <div class=\"xp-fill\" style=\"width: {{ xpProgress }}%;\"></div>
            </div>
        </div>
    
    </div>

    <div class=\"info\">
        <ul>
        <li>Email: {{ user.getEmail() }}</li>
        <li>Ev. P: {{ user.getEvalPoints() }}</li>
        </ul>
    </div>

</div>
", "components/userinfo.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/components/userinfo.html.twig");
    }
}
