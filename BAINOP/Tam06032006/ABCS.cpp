#include<bits/stdc++.h>

using namespace std;

int main()
{
     freopen("ABCS.INP","r",stdin);
     freopen("ABCS.OUT","w",stdout);
     int N=7;
     long long int a[N];
     for(int i=0;i<N;i++) cin>>a[i];
     sort(a,a+N);
     do
     {

     if (a[3]!=a[0]+a[1]) continue;
     if (a[4]!=a[1]+a[2]) continue;
     if (a[5]!=a[0]+a[2]) continue;
     if (a[6]!=a[0]+a[1]+a[2]) continue;
     break;
     }
     while(next_permutation(a,a+N));
     for(int i=0;i<3;i++) cout<<a[i]<<" ";
}
