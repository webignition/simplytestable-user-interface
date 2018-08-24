<?php

namespace webignition\SimplyTestableUserInterface;

interface UserInterface
{
    public function setUsername(string $username);
    public function getUsername(): ?string;
    public function setPassword(string $password);
    public function getPassword(): ?string;
    public function equals(UserInterface $user): bool;
}
