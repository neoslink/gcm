class Gcm:
  xo_seed = 5
  a_multiplier = 5
  c_additive_constant = 0
  m_module = 10007

  def value(self, aXi):
    return ( ((self.a_multiplier * aXi) + self.c_additive_constant) % self.m_module)

  def Xn(self):
    aXi = self.value(self.xo_seed)

    print aXi

    while (aXi != self.xo_seed):
      aXi = self.value(aXi)
      print aXi

gcm = Gcm()

gcm.Xn()
