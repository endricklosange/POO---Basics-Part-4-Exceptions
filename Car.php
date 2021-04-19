<?php



class Car
{
    private bool $hasParkBrake = true;
    
        public function getParkBrake(): bool 
        {
            return $this->hasParkBrake;
        }
        public function setParkBrake(bool $hasParkBrake): void 
        {
            $this->hasParkBrake = $hasParkBrake;
        }
        
        public function changePark(): string
        {
            try
            {
                if ($this->hasParkBrake == true) 
                {
                    throw new Exception("le frein à main est actif ! ");
                }
            } 
            catch(Exception $e)
            {
                echo "Message " . $e->getMessage() ;
                $this->setParkBrake(false);
            }
            finally
            {
                return "Ma voiture roule comme un donut !";
            }
        }
    

}