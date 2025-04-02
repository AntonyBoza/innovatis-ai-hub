
import React from 'react';
import { 
  Dialog, 
  DialogContent, 
  DialogHeader, 
  DialogTitle,
  DialogDescription
} from "@/components/ui/dialog";

interface CalendlyModalProps {
  isOpen: boolean;
  onClose: () => void;
}

const CalendlyModal = ({ isOpen, onClose }: CalendlyModalProps) => {
  return (
    <Dialog open={isOpen} onOpenChange={(open) => !open && onClose()}>
      <DialogContent className="sm:max-w-[600px] max-h-[80vh] overflow-hidden">
        <DialogHeader>
          <DialogTitle>Schedule a Consultation</DialogTitle>
          <DialogDescription>
            Choose a convenient time for your consultation with our AI experts.
          </DialogDescription>
        </DialogHeader>
        <div className="h-[500px] w-full">
          <iframe
            src="https://calendly.com/innovatis-ai/consultation?email_notification_to=info@innovatis.ai&email_notification_to=arbozaleon@gmail.com"
            width="100%"
            height="100%"
            frameBorder="0"
          ></iframe>
        </div>
      </DialogContent>
    </Dialog>
  );
};

export default CalendlyModal;
