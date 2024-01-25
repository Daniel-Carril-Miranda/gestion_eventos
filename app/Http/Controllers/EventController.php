<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    public function attachParticipant ($eventId, $participantId)
    {
        $event = Event::find($eventId);
        $participant = Participant::find($participantId);

        if(!$event || $participant){
            return response()->json(['message' => 'Participante o evento no encontrado'], 404);
        }

        $event->participants()->attach($participantId);
        return response()->json(['message' => 'Participante agregaddo al evento'], 200);
    }
    public function detachParticipant ($eventId, $participantId)
    {
        $event = Event::find($eventId);
        $participant->Participant::find($participantId);

        if(!$event || $participant){
            return response()->json(['message' => 'Participante eliminado de evento'], 200);
        }
    }
    ?>
</body>
</html>