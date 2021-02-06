<?php declare(strict_types = 1);

namespace Nette\Forms;

use Nette\Bridges\FormsDI\FormsExtension;

if (class_exists(FormsExtension::class)) {
	class_alias(Control::class, ControlInterface::class);
	class_alias(FormRenderer::class, FormRendererInterface::class);
	class_alias(SubmitterControl::class, SubmitterControlInterface::class);
}
