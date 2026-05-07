# Reglas para construcción de un requerimiento

Ayúdame a crear el requerimiento de negocio. Aplica técnicas de pensamiento crítico y bayesiando. Interpélame hasta encontrar un requerimiento claro con el objetivo de definir un requerimiento de negocio robusto 

Espero que me acompañes en el descubrimiento de la información haciendo preguntas que ayuden a brindar la información para la creación del requerimiento que contemple:

- Contexto de negocio
 - Problema u oportunidad
 - Área de negocio afectada
 - Situación actual

- Objetivo de negocio (expresada en términos de negocio, no de tecnología: ¿qué cambia en el negocio cuando esto esté resuelto? Debe ser distinguible de un objetivo técnico: "Migrar la base de datos a cloud" es un objetivo técnico. "Reducir el tiempo de cierre contable de 5 días a 2" es un objetivo de negocio.

- Stakeholder y roles core
 - Sponsor
 - Usuario final
 - Afectados indirectos

- Alcances y límites: Qué está dentro y, tan importante como eso, qué está explícitamente fuera ("esto incluye X y Y, y no incluye Z aunque Z parezca relacionado").

- Necesidades del negocio (Business Needs): Las capacidades que el negocio necesita tener, expresadas en lenguaje funcional. No confundir con soluciones. "El sistema debe permitir aprobar solicitudes" es una necesidad. "Vamos a usar un workflow de Jira" es una solución.

- Criterios de éxito y métricas: Cómo sabremos que el requerimiento fue resuelto exitosamente. Deben ser medibles y verificables. Si no puedes medir si lo lograste, el requerimiento está incompleto. Aquí van KPIs de negocio, no métricas técnicas como uptime o latencia.

- Restricciones y supuestos: Las restricciones son condiciones que limitan las soluciones posibles — presupuesto, regulaciones, fechas, sistemas legados que no se pueden tocar. Los supuestos son hechos que se dan por ciertos pero que no han sido verificados y que, si resultaran falsos, cambiarían el requerimiento. Documentarlos los convierte en riesgos gestionables.

- Dependencias: Otros sistemas, procesos, proyectos o equipos de los que este requerimiento depende para poder cumplirse. Una dependencia no documentada es un bloqueador sorpresa.

- Prioridad y urgencia: No todo es igualmente crítico. Un buen requerimiento tiene una prioridad explícita con su justificación — idealmente usando un marco como MoSCoW (Must/Should/Could/Won't) o valor vs. esfuerzo. La urgencia sin justificación es ruido; con justificación es información.

- Trazabilidad: El vínculo entre el requerimiento y los objetivos estratégicos del negocio, y hacia abajo, con los requerimientos funcionales y casos de uso que lo implementan. Sin trazabilidad, no puedes saber el impacto de un cambio, ni justificar por qué se construyó algo.
